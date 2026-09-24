document.addEventListener('DOMContentLoaded', function () {

  var searchInput = document.getElementById('courseSearch');
  var schoolFilter = document.getElementById('filterSchool');
  var levelFilter = document.getElementById('filterLevel');
  var examFilter = document.getElementById('filterExam');
  var clearBtn = document.getElementById('clearFilters');
  var emptyClearBtn = document.getElementById('emptyClearBtn');
  var resultsCount = document.getElementById('resultsCount');
  var emptyState = document.getElementById('finderEmpty');
  var table = document.getElementById('courseTable');

  if (!table) return;

  var rows = Array.prototype.slice.call(table.querySelectorAll('.course-row'));
  var total = rows.length;

  function applyFilters() {

    var query = searchInput.value.trim().toLowerCase();
    var school = schoolFilter.value;
    var level = levelFilter.value;
    var exam = examFilter.value;

    var visible = 0;

    rows.forEach(function (row) {

      var matchesQuery = !query || row.dataset.search.indexOf(query) !== -1;
      var matchesSchool = !school || row.dataset.school === school;
      var matchesLevel = !level || row.dataset.level === level;
      var matchesExam = !exam || row.dataset.exam === exam;

      var show = matchesQuery && matchesSchool && matchesLevel && matchesExam;

      row.classList.toggle('d-none', !show);

      if (show) visible++;

    });

    resultsCount.textContent = visible;
    table.classList.toggle('d-none', visible === 0);
    emptyState.classList.toggle('d-none', visible !== 0);
  }

  [searchInput, schoolFilter, levelFilter, examFilter].forEach(function (el) {
    el.addEventListener('input', applyFilters);
    el.addEventListener('change', applyFilters);
  });

  function clearFilters() {
    searchInput.value = '';
    schoolFilter.value = '';
    levelFilter.value = '';
    examFilter.value = '';
    applyFilters();
  }

  clearBtn.addEventListener('click', clearFilters);
  emptyClearBtn.addEventListener('click', clearFilters);

  applyFilters();

});