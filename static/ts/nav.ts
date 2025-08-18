document.addEventListener("DOMContentLoaded", () => {
  const burgerBtn = window.document.getElementById("burgerBtn");
  const navTabs = window.document.getElementById("navTabs");

  if (burgerBtn !== null) {
    burgerBtn.addEventListener("click", () => {
      if (navTabs !== null) {
        const isOpen = navTabs.classList.toggle("open");
        burgerBtn.textContent = isOpen ? "✕" : "☰";
      }
    });
  }
});

document.body.addEventListener("htmx:afterSwap", async () => {
  const repoLi = document.querySelector(".repo-list-container");
  if (!repoLi) return;

  const cached = sessionStorage.getItem("github-repo");
  if (cached) {
    try {
      const repos = JSON.parse(cached);

      // Render cached repos exactly how you do it now
      repoLi.innerHTML = "";
      repos.forEach((repo) => {
        const a = document.createElement("a");
        a.href = repo.html_url;
        a.textContent = repo.name;
        a.target = "_blank";
        a.rel = "noopener noreferrer";
        a.style.display = "block";

        repoLi.appendChild(a);
      });

      return; // Don't fetch again
    } catch (err) {
      console.warn("Invalid cache, continuing to fetch");
    }
  }

  try {
    const res = await fetch("/github-repo");
    if (!res.ok) throw new Error("Network error");

    const repos = await res.json();

    // Save fresh data to cache here
    sessionStorage.setItem("github-repo", JSON.stringify(repos));

    repoLi.innerHTML = "";

    repos.forEach((repo) => {
      const a = document.createElement("a");
      a.href = repo.html_url;
      a.textContent = repo.name;
      a.target = "_blank";
      a.rel = "noopener noreferrer";
      a.style.display = "block";

      repoLi.appendChild(a);
    });
  } catch (error) {
    console.error("Fetching repos failed:", error);
  }
});
