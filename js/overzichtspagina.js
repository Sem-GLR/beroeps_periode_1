// ---- Data (vervang door je eigen bron / fetch) ----
const recipes = [
  { name: "Guacamole en gezonde chips", time: 10, img: "img/guacamole.jpg",
    tags: [["€10 - 20,-", "red"], ["Alt. ingred.", "yellow"], ["Groente", "teal"]] },
  { name: "Vis en groenten", time: 20, img: "img/vis.jpg",
    tags: [["€30,-", "red"], ["Vlees", "red"], ["Groente", "teal"], ["WVXYZ", "sky"], ["WVXYZ", "orange"]] },
  { name: "Budget-goulash", time: 15, img: "img/goulash.jpg",
    tags: [["€10 - 20,-", "red"], ["Alt. ingred.", "yellow"], ["Groente", "teal"]] },
  { name: "Appeltaart", time: 60, img: "img/appeltaart.jpg",
    tags: [["€10,-", "red"], ["Zoet", "orange"]] },
  { name: "Wokgroenten met rijst", time: 25, img: "img/wok.jpg",
    tags: [["€10 - 20,-", "red"], ["Groente", "teal"]] }
];

// Letterbereiken voor de sorteerknoppen; kleur hoort bij de CSS (data-color)
const groups = [
  { label: "ABC",             color: "teal"   },
  { label: "DEFGHIJKLM",      color: "orange" },
  { label: "WVXYZ",           color: "deep"   },
  { label: "DEFGHIJKLMNOPQ",  color: "red"    },
  { label: "RSTU",            color: "yellow" }
];

const MAX_TAGS = 3;                       // meer dan dit wordt "..."
const active = new Set(groups.map(g => g.label));
let query = "";

const filtersEl = document.getElementById("filters");
const sectionsEl = document.getElementById("sections");
const searchEl = document.getElementById("search");

// ---- Helpers ----
const esc = s => String(s).replace(/[&<>"']/g, c =>
  ({ "&": "&amp;", "<": "&lt;", ">": "&gt;", '"': "&quot;", "'": "&#39;" }[c]));

const firstLetter = name => name.trim().charAt(0).toUpperCase();

function cardHTML(r) {
  const shown = r.tags.slice(0, MAX_TAGS).map(([t, c]) => `<span class="tag ${c}">${esc(t)}</span>`);
  if (r.tags.length > MAX_TAGS) shown.push(`<span class="tag more" title="Meer tags">...</span>`);
  return `
    <article class="card">
      <img src="${esc(r.img)}" alt="${esc(r.name)}" loading="lazy">
      <h3>${esc(r.name)}</h3>
      <p class="time">⏱ ${r.time} minuten kooktijd</p>
      <div class="tags">${shown.join("")}</div>
    </article>`;
}

// ---- Render ----
function renderFilters() {
  filtersEl.innerHTML = groups.map(g =>
    `<button type="button" class="filter" data-color="${g.color}" data-label="${g.label}"
       aria-pressed="${active.has(g.label)}">${g.label}</button>`).join("");
}

function renderSections() {
  const q = query.trim().toLowerCase();
  const html = groups
    .filter(g => active.has(g.label))
    .map(g => {
      const items = recipes
        .filter(r => g.label.includes(firstLetter(r.name)))
        .filter(r => r.name.toLowerCase().includes(q))
        .sort((a, b) => a.name.localeCompare(b.name, "nl"));
      if (!items.length) return "";
      return `
        <section class="recipe-section" aria-label="Recepten ${g.label}">
          <h2>${g.label}</h2>
          <div class="row"><div class="track" tabindex="0">${items.map(cardHTML).join("")}</div></div>
        </section>`;
    })
    .join("");
  sectionsEl.innerHTML = html || `<p style="color:#fff;margin-top:2rem">Geen recepten gevonden.</p>`;
}

// ---- Events ----
filtersEl.addEventListener("click", e => {
  const btn = e.target.closest(".filter");
  if (!btn) return;
  const label = btn.dataset.label;
  active.has(label) ? active.delete(label) : active.add(label);
  btn.setAttribute("aria-pressed", active.has(label));
  renderSections();
});

searchEl.addEventListener("input", e => {
  query = e.target.value;
  renderSections();
});

renderFilters();
renderSections();