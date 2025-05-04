<script lang="ts">
	import { Header, Footer, Nav, Form } from '$utils';
	import '$lib/styles/style.css';

	export let data: { title: string };
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
					<h4 class="about-txt">
						Hi, I’m Sasha! — a creative web developer and experimental musician based in Denmark.
					</h4>
					<p class="about-txt">
						I built this site as both a portfolio and a digital playground to share my projects and
						ideas.
					</p>
					<p class="about-txt">
						I love personal sites! They're rare these days, but so expressive. Let's bring them back
						— together!
					</p>
				</details>

				<details class="about-details" open>
					<summary class="about-title">Skillset</summary>
					<details>
						<summary class="about-summary">HTML</summary>
						<h4 class="about-summary-title">Actively working with:</h4>
						<ul class="about-summary-list">
							<li>- Semantics</li>
							<li>- Accessibility</li>
						</ul>
					</details>
					<details>
						<summary class="about-summary">CSS</summary>
						<h4 class="about-summary-title">Actively working with::</h4>
						<ul class="about-summary-list">
							<li>- SASS</li>
							<li>- SCSS</li>
						</ul>
					</details>
					<details>
						<summary class="about-summary">PYTHON</summary>
						<h4 class="about-summary-title">Actively working with::</h4>
						<ul class="about-summary-list">
							<li>- Webscraping</li>
							<li>- BeautifulSoup</li>
							<li>- Requests</li>
						</ul>
					</details>
					<details>
						<summary class="about-summary">JAVASCRIPT</summary>
						<h4 class="about-summary-title">Actively working with::</h4>
						<ul class="about-summary-list">
							<li>- API handling</li>
							<li>- DOM interaction</li>
							<li>- Component-based architecture</li>
						</ul>
					</details>
					<details>
						<summary class="about-summary">FRAMEWORKS</summary>
						<h4 class="about-summary-title">Actively working with::</h4>
						<ul class="about-summary-list">
							<li>- Svelte</li>
							<li>- SvelteKit</li>
						</ul>
					</details>
					<details>
						<summary class="about-summary">TOOLING</summary>
						<h4 class="about-summary-title">Actively working with::</h4>
						<ul class="about-summary-list">
							<li>- Vite</li>
							<li>- Node</li>
							<li>- Git</li>
						</ul>
					</details>

					<details>
						<summary class="about-summary">PURE DATA</summary>
					</details>
					<details>
						<summary class="about-summary">DIY EFFECTS PEDALS</summary>
					</details>
				</details>

				<details class="about-details">
					<summary class="about-title">Contact</summary>
					<h4 class="about-txt">
						I’m always happy to connect, whether you want to share a project, ask a question, or
						just say hi.
					</h4>
					<p class="about-txt">
						If you’re into web development, sound experiments, and DIY creations, and want to give
						or need feedback—or someone to help build your vision, I’d love to hear from you!
					</p>
					<p class="about-txt">
						I’m also open to freelance or full‑time opportunities, so feel free to reach out!
					</p>
					<address class="about-txt">
						<a href="mailto:you@example.com">E-mail</a>
					</address>
					<ul>
						<li><a href="https://github.com/makulatorn" target="_blank">Github</a></li>
						<li><a href="https://makulator.bandcamp.com/" target="_blank">Bandcamp</a></li>
					</ul>
				</details>
			</section>
		</div>
	</main>
</div>
<Form />
<Footer />
