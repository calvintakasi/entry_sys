const form = document.getElementById('entryForm');
const entriesList = document.getElementById('entriesList');

// Store entries in memory (in a real app, this would be in a database)
let entries = [];

form.addEventListener('submit', (e) => {
  e.preventDefault();
  
  const entry = {
    id: Date.now(), // Simple way to generate unique IDs
    name: document.getElementById('name').value,
    purpose: document.getElementById('purpose').value,
    mobile: document.getElementById('mobile').value,
    date: document.getElementById('date').value,
    inTime: document.getElementById('inTime').value,
    outTime: document.getElementById('outTime').value
  };

  entries.unshift(entry); // Add new entry to the beginning of the array
  updateEntriesList();
  form.reset();
});

function updateEntriesList() {
  entriesList.innerHTML = entries.map(entry => `
    <div class="entry-item">
      <h3>${entry.name}</h3>
      <p><strong>Purpose:</strong> ${entry.purpose}</p>
      <p><strong>Mobile:</strong> ${entry.mobile}</p>
      <p><strong>Date:</strong> ${entry.date}</p>
      <p><strong>In Time:</strong> ${entry.inTime}</p>
      <p><strong>Out Time:</strong> ${entry.outTime}</p>
    </div>
  `).join('');
}