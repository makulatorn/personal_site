<script lang="ts">
	import { Header, Footer, Nav, Form } from '$utils';
	import '$lib/styles/style.css';

	export let data: { title: string };
	export let form: any;
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
					<details class="about-details">
						<summary class="about-title">Email</summary>
						<Form {form}/>
					</details>
					<details class="about-details">
						<summary class="about-title">Links</summary>
						<ul>
							<li><a href="https://github.com/makulatorn" target="_blank">Github</a></li>
							<li><a href="https://makulator.bandcamp.com/" target="_blank">Bandcamp</a></li>
						</ul>
					</details>
				</details>
			</section>
		</div>
	</main>
</div>
<Footer />
