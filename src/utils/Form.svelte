<script>
	export let form;
</script>

<form method="POST">
	<div>
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required />
	</div>

	<div>
		<label for="message">Message:</label>
		<textarea name="message" id="message" required></textarea>
	</div>
	{#if form?.success}
		<p>Thank you for you message, I'll get back to you soon!</p>
	{/if}
	<input type="submit" value="Submit" />
</form>
