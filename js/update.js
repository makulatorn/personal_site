const desiredRepo = "personal_site";
const dateTagClass = ".date";
const commitTagClass = ".commit-message-log";  // New tag class for commit messages log

var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    let repos = JSON.parse(this.responseText);
    
    // Look for the desired repository
    repos.forEach((repo) => {
      if (repo.name == desiredRepo) {
        var lastUpdated = new Date(repo.updated_at);
        var day = lastUpdated.getUTCDate();
        var month = lastUpdated.getUTCMonth() + 1; // Add 1 to get the correct month
        var year = lastUpdated.getUTCFullYear();
        
        // Display the last updated date
        document.querySelector(dateTagClass).textContent = `Last updated: ${year}-${month}-${day}`;
        
        // Fetch all commits and display them
        fetchAllCommits(repo.owner.login, repo.name);
      }
    });
  }
};

xhttp.open("GET", "https://api.github.com/users/makulatorn/repos", true);
xhttp.send();

// Function to fetch all commits and display them
function fetchAllCommits(owner, repo) {
  var commitXhttp = new XMLHttpRequest();
  commitXhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      let commits = JSON.parse(this.responseText);
      if (commits.length > 0) {
        // Loop through all commits and display them
        commits.forEach((commit) => {
          let commitMessage = commit.commit.message;
          let commitDate = new Date(commit.commit.author.date);
          let commitDay = commitDate.getUTCDate();
          let commitMonth = commitDate.getUTCMonth() + 1;
          let commitYear = commitDate.getUTCFullYear();
          
          // Create a log entry for each commit
          let commitLogEntry = document.createElement("div");
          commitLogEntry.classList.add("commit-log-entry");
          commitLogEntry.textContent = `${commitDay}-${commitMonth}-${commitYear}: ${commitMessage}`;
          
          // Append the commit log entry to the commit log container
          document.querySelector(commitTagClass).appendChild(commitLogEntry);
        });
      }
    }
  };
  
  // GitHub API for fetching commits (first 30 by default)
  commitXhttp.open("GET", `https://api.github.com/repos/${owner}/${repo}/commits`, true);
  commitXhttp.send();
}
