<?php get_header() ?>

<style>
	body {
		min-height: 100vh;
		display: flex;
		flex-direction: column;
	}
	body.admin-bar {
		min-height: calc(100vh - 32px);
	}
	header {
		position: relative;
		background: var(--title-color);
	}
	.page_wrapper {
		min-height: 350px;
		flex-grow: 1;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}
	.page_wrapper h1 {
		font-weight: 400;
		color: var(--title-color);
		margin-top: 0;
		text-align: center;
		text-transform: capitalize;
	}

	@media(max-width: 767px) {
		.page_wrapper {
			min-height: 300px;
		}
		.page_wrapper h1 {
			font-size: 46px;
		}
	}
</style>

<div class="page_wrapper">
	<h1>Page don't found</h1>
	<a href="/" class="standard_button">Go to home page</a>
</div>

<?php get_footer() ?>