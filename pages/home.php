<?php include "../layout.php"; ?>
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

		<details class="about-details">
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
				<h4 class="about-summary-title">Actively working with:</h4>
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
					<li>- Backend (Webserver)</li>
				</ul>
			</details>
			<details>
				<summary class="about-summary">JAVASCRIPT</summary>
				<h4 class="about-summary-title">Actively working with:</h4>
				<ul class="about-summary-list">
					<li>- API handling</li>
					<li>- DOM interaction</li>
					<li>- Component-based architecture</li>
				</ul>
			</details>
			<details>
				<summary class="about-summary">FRAMEWORKS & LIBRARIES</summary>
				<h4 class="about-summary-title">Actively working with:</h4>
				<ul class="about-summary-list">
					<li>- Svelte</li>
					<li>- SvelteKit</li>
					<li>- React</li>
					<li>- HTMX</li>
					<li>- Alpine.js</li>
					<li>- Flask</li>
				</ul>
			</details>
			<details>
				<summary class="about-summary">TOOLING</summary>
				<h4 class="about-summary-title">Actively working with:</h4>
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
	</section>
</div>
<?php if (!isset($_SERVER['HTTP_HX_REQUEST'])): ?>
	</main>
	</body>

	</html>
<?php endif; ?>