<script>
	let isOpen = false;

	function toggleMenu() {
		isOpen = !isOpen;
	}
</script>

<nav>
	<button class="burger" on:click={toggleMenu}>
		{#if isOpen} ✕ {/if}
		{#if !isOpen} ☰ {/if}
	</button>

	<ul class="nav-tabs {isOpen ? 'open' : ''}">
		<li><a href="/">Home</a></li>
		<li><a href="/projects">Projects</a></li>
		<li><a href="/resources">Resources</a></li>
	</ul>

	<aside class="side-menu {isOpen ? 'open' : ''}">
		<ul class="side-menu-list">
			<li><a id="Github" href="https://github.com/makulatorn" target="_blank">Github</a></li>
			<li><a id="Bandcamp" href="https://makulator.bandcamp.com/" target="_blank">Bandcamp</a></li>
		</ul>
	</aside>
</nav>


