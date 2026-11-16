// Sjablonen voor nieuwe rijen. {i} wordt het volgende rijnummer.
const sjablonen = {
    ingredienten: (i) => `
        <input type="text" name="ingredienten[${i}][hoeveelheid]" placeholder="100g" maxlength="20" aria-label="Hoeveelheid">
        <input type="text" name="ingredienten[${i}][naam]" placeholder="Ingrediënt" maxlength="60" aria-label="Ingrediënt">
        <button type="button" class="verwijder" aria-label="Verwijder ingrediënt">×</button>`,
    keukenspullen: () => `
        <input type="text" name="keukenspullen[]" placeholder="Bijv. Houten lepel" maxlength="60" aria-label="Keukenspul">
        <button type="button" class="verwijder" aria-label="Verwijder keukenspul">×</button>`,
    stappen: (i) => `
        <span class="stap-nummer">${i + 1}.</span>
        <input type="text" name="stappen[]" placeholder="Korte uitleg" maxlength="300" aria-label="Stap">
        <button type="button" class="verwijder" aria-label="Verwijder stap">×</button>`
};

let teller = { ingredienten: 1, keukenspullen: 1, stappen: 1 };

document.querySelectorAll('.toevoegen').forEach((knop) => {
    knop.addEventListener('click', () => {
        const naam = knop.dataset.lijst;
        const rij = document.createElement('div');
        rij.className = 'lijst-rij';
        rij.innerHTML = sjablonen[naam](teller[naam]);
        document.getElementById(naam).appendChild(rij);
        teller[naam]++;
        rij.querySelector('input').focus();
    });
});

// Verwijderen (ook voor rijen die later worden toegevoegd)
document.addEventListener('click', (e) => {
    if (!e.target.classList.contains('verwijder')) return;
    const lijst = e.target.closest('div[id]');
    const rij = e.target.closest('.lijst-rij');
    if (lijst.children.length > 1) rij.remove();
    else rij.querySelectorAll('input').forEach((i) => (i.value = ''));
    nummerStappen();
});

function nummerStappen() {
    document.querySelectorAll('#stappen .stap-nummer').forEach((el, i) => {
        el.textContent = (i + 1) + '.';
    });
}