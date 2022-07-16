<div class="pagination">
	<div class="list-lists">

		<?php if(!($_SESSION['list'] < 5)): ?>
			<a href="/users/list/<?= $_SESSION['list']-4 ?>"><?= $_SESSION['list']-4 ?></a>
		<?php endif ?>
		<?php if(!($_SESSION['list'] < 4)): ?>
			<a href="/users/list/<?= $_SESSION['list']-3 ?>"><?= $_SESSION['list']-3 ?></a>
		<?php endif ?>
		<?php if(!($_SESSION['list'] < 3)): ?>
			<a href="/users/list/<?= $_SESSION['list']-2 ?>"><?= $_SESSION['list']-2 ?></a>
		<?php endif ?>
		<?php if(!($_SESSION['list'] < 2)): ?>
			<a href="/users/list/<?= $_SESSION['list']-1 ?>"><?= $_SESSION['list']-1 ?></a>
		<?php endif ?>

			<a class="red" href="/users/list/<?= $_SESSION['list'] ?>"><?= $_SESSION['list'] ?></a>

		<?php if ($_SESSION['list']+1 < $usersCount['count(*)'] / $paginationStep): ?>
			<a href="/users/list/<?= $_SESSION['list']+1 ?>"><?= $_SESSION['list']+1 ?></a>
		<?php endif ?>
		<?php if ($_SESSION['list']+2 < $usersCount['count(*)'] / $paginationStep): ?>
			<a href="/users/list/<?= $_SESSION['list']+2 ?>"><?= $_SESSION['list']+2 ?></a>
		<?php endif ?>
		<?php if ($_SESSION['list']+3 < $usersCount['count(*)'] / $paginationStep): ?>
			<a href="/users/list/<?= $_SESSION['list']+3 ?>"><?= $_SESSION['list']+3 ?></a>
		<?php endif ?>
		<?php if ($_SESSION['list']+4 < $usersCount['count(*)'] / $paginationStep): ?>
			<a href="/users/list/<?= $_SESSION['list']+4 ?>"><?= $_SESSION['list']+4 ?></a>
		<?php endif ?>

	</div>


	<form action="/users">
		<p class="pagination-input-description">Кол-во записей на странице: </p>
		<input class="input-lists-count" type="number" max="100" name="paginationStep">
		<button class="rounded-button" type="submit">Установить</button>
	</form>
	<form action="/users">
		<p class="pagination-input-description">Cтраница: </p>
		<input class="input-lists-number" type="number" name="list">
		<button class="rounded-button" type="submit">Перейти</button>
	</form>
</div>