const footerPlaceholder = document.querySelector("[data-site-footer]");

if (!footerPlaceholder) {
	throw new Error("The shared footer placeholder is missing.");
}

fetch(new URL("footer.html", document.currentScript.src))
	.then(response => {
		if (!response.ok) {
			throw new Error(`Footer request failed: ${response.status}`);
		}

		return response.text();
	})
	.then(footer => {
		footerPlaceholder.outerHTML = footer;
	})
	.catch(error => {
		console.error("Unable to load the shared footer.", error);
	});
