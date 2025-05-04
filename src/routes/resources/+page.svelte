<script lang="ts">
	import { Header, Footer, Nav } from '$utils';
	import '$lib/styles/style.css';

	export let data: {title: string};
</script>

<svelte:head>
	<title>{data.title}</title>
	<meta name="description" content="Forsiden" />
	<meta name="keywords" content="miljøbevidst, klimavenlig, bæredygtig, grøn, omstilling, miljø, venlige, produkter" />
</svelte:head>

<Header />

<div class="wrapper">
	<Nav />

	<aside class="side-menu">
		<ul class="side-menu-list">
			<li><a id="Github" href="https://github.com/makulatorn" target="_blank">Github</a></li>
			<li><a id="Bandcamp" href="https://makulator.bandcamp.com/" target="_blank">Bandcamp</a></li>
		</ul>
	</aside>

	<main>
		<div class="content-container">
			<section class="welcome">
				<h2>Welcome to Resources</h2>
				<p>Here you'll eventually find tools, articles, code snippets, and music production resources.</p>
			</section>
		</div>
	</main>
</div>

<Footer />
