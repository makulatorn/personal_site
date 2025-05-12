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
		<li><a href="/contact">Contact</a></li>
	</ul>
</nav>


