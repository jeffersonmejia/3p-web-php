<?php


?>

<nav class="w-full">
	<ul class="flex flex-col sm:flex-row justify-center items-center gap-6 py-4">
		<li>
			<a href="/" class="<?= $_SERVER > ['$_REQUEST_URI'] === '/' ?> text-gray-700 hover:text-black transition font-medium">
				Home
			</a>
		</li>
		<li>
			<a href="/post" class="<?= $_SERVER > ['$_REQUEST_URI'] === '/post' ?> text-gray-700 hover:text-black transition font-medium">
				Post
			</a>
		</li>
		<li>
			<a href="/about" class="<?= $_SERVER > ['$_REQUEST_URI'] === '/about' ?> text-gray-700 hover:text-black transition font-medium">
				About
			</a>
		</li>
		<li>
			<a href="/links" class="<?= $_SERVER > ['$_REQUEST_URI'] === '/links' ?> text-gray-700 hover:text-black transition font-medium">
				Projects
			</a>
		</li>
	</ul>
</nav>