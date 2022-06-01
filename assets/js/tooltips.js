const NavItems = document.getElementsByClassName("nav-item");

const ManifesteLink = NavItems[1];

ManifesteLink.setAttribute("data-bs-toggle", "tooltip");
ManifesteLink.setAttribute("data-bs-html", "true");
ManifesteLink.setAttribute("title", "En cours de réflexion...");
