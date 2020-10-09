<script>
import { dataset_dev, each } from "svelte/internal";

	export let name;
	let data = [];
	function fetchDataFunc() {
		fetch("http://localhost:8080/users")
		.then(response => response.json())
		.then(res => data = [...data,res]);
	}
	console.log(data)
</script>

<style>
	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
	}

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>

<button on:click= {fetchDataFunc}>Fetch Data</button>
{#await data}
	<h3>Loading data...</h3>
{:then users}
	{#each users as user}
		<h2>{user.name}</h2>	
	{/each}
	
{/await}