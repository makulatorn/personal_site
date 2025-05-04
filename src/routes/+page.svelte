<script lang="ts">
	import { Header, Footer, Nav } from '$utils';
	import '$lib/styles/style.css';

	export let data: {title: string}
</script>

<svelte:head>
	<title>{data.title}</title>
	<meta name="description" content="Forsiden" />
	<meta
		name="keywords"
		content="miljøbevidst, klimavenlig, bæredygtig, grøn, omstilling, miljø, venlige, produkter"
	/>
</svelte:head>

<Header />

<div class="wrapper">
	<Nav />

	<main>
		<div class="content-container">
			<section class="about">
				<details class="about-details" open>
					<summary class="about-title">About me</summary>
					<h4 class="about-txt">I'm Sasha, a webdev and experimental musician from Denmark</h4>
					<p class="about-txt">
						This site is meant as a portfolio, a way to express myself, and a hub to show off
						projects I’m working on.
					</p>
					<p class="about-txt">
						I love personal sites! They're rare these days, but so expressive. Let's bring them back
						— together!
					</p>
				</details>

				<details class="about-details">
					<summary class="about-title">Experience/Interests</summary>
					<ul>
						<li>HTML</li>
						<li>CSS/SASS</li>
						<li>Python</li>
						<li>JavaScript</li>
						<li>Pure Data</li>
						<li>DIY effects pedals</li>
					</ul>
				</details>

				<details class="about-details">
					<summary class="about-title">Contact</summary>
					<h4 class="about-txt">Ways to get in contact with me!</h4>
					<address class="about-txt"><a href="#">E-mail</a></address>
					<ul>
						<li><a href="https://github.com/makulatorn">Github</a></li>
						<li><a href="https://makulator.bandcamp.com/">Bandcamp</a></li>
					</ul>
				</details>
			</section>
		</div>
	</main>
</div>

<Footer />
