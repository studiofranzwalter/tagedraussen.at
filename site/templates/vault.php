<?php
 /*
	*
	* @info Vault page template
	* @path site/templates/vault.php
	* @date 20220627
	*
	*/
?>

<?php snippet('head') ?>

<main data-grid>

	<?php snippet('header') ?>

	<nav data-flex>
		<a href="<?= page('startseite')->url() ?>">‹ <?= t('goBackHome') ?></a>
	</nav>

	<?php if ($kirby->user() == false): ?>

		<h3 data-block="heading">Passwort eingeben</h3>

		<div data-block="text">
			<?= $page->introduction()->kt() ?>
		</div>

		<div data-block="text form">
			<form method="post" action="<?= $page->url() ?>">
				<input
					autocomplete="off"
					tabindex="-1"
					name="email"
					value="login@tagedraussen-film.at"
					id="email"
					type="email"
					hidden
				>
				<label hidden for="password"><?= $page->password()->html() ?></label>
				<input
					type="password"
					autocomplete="off"
					id="password"
					name="password"
					value="<?= get('password') ? esc(get('password'), 'attr') : '' ?>"
					placeholder="Passwort eingeben"
				>
				<input
					type="submit"
					name="login"
					value="Anmelden"
					class="submit button"
				>
			</form>

			<?php if($error): ?>
				<p class="notification__error">Das Passwort war nicht korrekt.</p>
			<?php endif ?>

		</div>

	<?php else: ?>

		<?= $page->contents()->toBlocks() ?>

	<?php endif ?>

	<?php snippet('footer') ?>

</main>

<?php snippet('foot') ?>
