document.addEventListener("DOMContentLoaded", () => {
  fetch("api/articles.php")
    .then(res => res.json())
    .then(data => {
      const container = document.getElementById("article-container");
      data.forEach(article => {
        const div = document.createElement("div");
        div.className = "article-card animate";
        div.innerHTML = `
          <h2>${article.title}</h2>
          <p><i>${article.category}</i></p>
          <p>${article.content.substring(0, 200)}...</p>
          <hr>
        `;
        container.appendChild(div);
      });
    });
});