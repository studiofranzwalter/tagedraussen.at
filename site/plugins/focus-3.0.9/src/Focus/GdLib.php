<?php

namespace Flokosiol\Focus;

ini_set('memory_limit', '512M');

use claviska\SimpleImage;
use Kirby\Image\Image;
use Kirby\Image\Dimensions;
use Kirby\Image\Darkroom;

class GdLib extends Darkroom
{
    /**
     * Processes the image with the SimpleImage library
     *
     * @param string $file
     * @param array $options
     * @return array
     */
    public function process(string $file, array $options = []): array
    {
        $options = $this->preprocess($file, $options);

        // original image dimension for focus cropping
        $originalImage = new Image($file);
        if ($dimensions = $originalImage->dimensions()) {
            $options['originalWidth'] = $dimensions->width();
            $options['originalHeight'] = $dimensions->height();
        }

        $image = new SimpleImage();
        $image->fromFile($file);

        $image = $this->autoOrient($image, $options);
        $image = $this->resize($image, $options);
        $image = $this->blur($image, $options);
        $image = $this->grayscale($image, $options);

        $image->toFile($file, null, $options['quality']);

        return $options;
    }

    /**
     * Activates the autoOrient option in SimpleImage
     * unless this is deactivated
     *
     * @param \claviska\SimpleImage $image
     * @param $options
     * @return \claviska\SimpleImage
     */
    protected function autoOrient(SimpleImage $image, $options)
    {
        if ($options['autoOrient'] === false) {
            return $image;
        }

        return $image->autoOrient();
    }

    /**
     * Wrapper around SimpleImage's resize and crop methods
     *
     * @param \claviska\SimpleImage $image
     * @param array $options
     * @return \claviska\SimpleImage
     */
    protected function resize(SimpleImage $image, array $options)
    {
        if ($options['crop'] === false) {
            return $image->resize($options['width'], $options['height']);
        }

        // focus cropping
        if (!empty($options['focus'])) {
            $focusCropValues = \Flokosiol\Focus::cropValues($options);
            return $image->crop($focusCropValues['x1'], $focusCropValues['y1'], $focusCropValues['x2'], $focusCropValues['y2'])->thumbnail($options['width'], $options['height']);
        }

        return $image->thumbnail($options['width'], $options['height'] ?? $options['width'], $options['crop']);

    }

    /**
     * Applies the correct blur settings for SimpleImage
     *
     * @param \claviska\SimpleImage $image
     * @param array $options
     * @return \claviska\SimpleImage
     */
    protected function blur(SimpleImage $image, array $options)
    {
        if ($options['blur'] === false) {
            return $image;
        }

        return $image->blur('gaussian', (int)$options['blur']);
    }

    /**
     * Applies grayscale conversion if activated in the options.
     *
     * @param \claviska\SimpleImage $image
     * @param array $options
     * @return \claviska\SimpleImage
     */
    protected function grayscale(SimpleImage $image, array $options)
    {
        if ($options['grayscale'] === false) {
            return $image;
        }

        return $image->desaturate();
    }
}