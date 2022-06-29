<?php

function buildPageTree($page) {

    // get the subpages definition from the blueprint
    $builder = $page->blueprint()->subpages();

    // if any is set…
    if (empty($builder) === false) {

        // …loop through each page to be built
        foreach($builder as $build) {

            // check if all necessary fields have been defined in subpages
            $missing = A::missing($build, ['title', 'template', 'uid']);

            // if any is missing, skip
            if (empty($missing) === false) {
                continue;
            }

            try {
                // the parent itself is created as a draft
                $subPage = $page->createChild([
                    'content'  => [
                        'title' => $build['title']
                    ],
                    'slug'     => $build['uid'],
                    'template' => $build['template'],
                ]);
            } catch (Exception $error) {
                throw new Exception($error);
            }

            // publish the subpages, so that they are published
            // when the parent is published
            if ($subPage) {

                // call the function recursively
                buildPageTree($subPage);

                // publish subpages and sort
                $subPage->publish();

                if (isset($build['num']) === true) {
                    $subPage->changeSort($build['num']);
                }
            }
        }
    }
}