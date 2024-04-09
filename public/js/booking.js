const isLeapYear = (year) => {
    return (
    (year % 4 === 0 && year % 100 !== 0 && year % 400 !== 0) ||
    (year % 100 === 0 && year % 400 === 0)
    );
};
const getFebDays = (year) => {
    return isLeapYear(year) ? 29 : 28;
};
let calendar = document.querySelector('.calendar');
const month_names = [
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'July',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember',
    ];
let month_picker = document.querySelector('#month-picker');
const dayTextFormate = document.querySelector('.day-text-formate');
const timeFormate = document.querySelector('.time-formate');
const dateFormate = document.querySelector('.date-formate');

month_picker.onclick = () => {
    month_list.classList.remove('hideonce');
    month_list.classList.remove('hide');
    month_list.classList.add('show');
    dayTextFormate.classList.remove('showtime');
    dayTextFormate.classList.add('hidetime');
    timeFormate.classList.remove('showtime');
    timeFormate.classList.add('hideTime');
    dateFormate.classList.remove('showtime');
    dateFormate.classList.add('hideTime');
};

const generateCalendar = (month, year) => {
    let calendar_days = document.querySelector('.calendar-days');
    calendar_days.innerHTML = '';
    let calendar_header_year = document.querySelector('#year');
    let days_of_month = [
        31,
        getFebDays(year),
        31,
        30,
        31,
        30,
        31,
        31,
        30,
        31,
        30,
        31,
    ];

    let currentDate = new Date();

    month_picker.innerHTML = month_names[month];

    calendar_header_year.innerHTML = year;

    let first_day = new Date(year, month);


    for (let i = 0; i <= days_of_month[month] + first_day.getDay() - 1; i++) {

    let day = document.createElement('div');

    if (i >= first_day.getDay()) {
        day.innerHTML = i - first_day.getDay() + 1;

        if (i - first_day.getDay() + 1 === currentDate.getDate() &&
        year === currentDate.getFullYear() &&
        month === currentDate.getMonth()
        ) {
        day.classList.add('current-date');
        }
    }
    calendar_days.appendChild(day);
    }
};

let month_list = calendar.querySelector('.month-list');
month_names.forEach((e, index) => {
    let month = document.createElement('div');
    month.innerHTML = `<div>${e}</div>`;

    month_list.append(month);
    month.onclick = () => {
        currentMonth.value = index;
        generateCalendar(currentMonth.value, currentYear.value);
        month_list.classList.replace('show', 'hide');
        dayTextFormate.classList.remove('hideTime');
        dayTextFormate.classList.add('showtime');
        timeFormate.classList.remove('hideTime');
        timeFormate.classList.add('showtime');
        dateFormate.classList.remove('hideTime');
        dateFormate.classList.add('showtime');
    };
});

(function() {
    month_list.classList.add('hideonce');
})();
document.querySelector('#pre-year').onclick = () => {
    --currentYear.value;
    generateCalendar(currentMonth.value, currentYear.value);
};
document.querySelector('#next-year').onclick = () => {
    ++currentYear.value;
    generateCalendar(currentMonth.value, currentYear.value);
};

let currentDate = new Date();
let currentMonth = { value: currentDate.getMonth() };
let currentYear = { value: currentDate.getFullYear() };
generateCalendar(currentMonth.value, currentYear.value);

const todayShowTime = document.querySelector('.time-formate');
const todayShowDate = document.querySelector('.date-formate');

const currshowDate = new Date();
const showCurrentDateOption = {
    year: 'numeric',
    month: 'long',
    day: 'numeric',
    weekday: 'long',
};
const currentDateFormate = new Intl.DateTimeFormat(
    'id',
    showCurrentDateOption
).format(currshowDate);
todayShowDate.textContent = currentDateFormate;
setInterval(() => {
    const timer = new Date();
    const option = {
    hour: 'numeric',
    minute: 'numeric',
    second: 'numeric',
    };
    const formateTimer = new Intl.DateTimeFormat('en-us', option).format(timer);
    let time = `${`${timer.getHours()}`.padStart(
        2,
        '0'
    )}:${`${timer.getMinutes()}`.padStart(
        2,
        '0'
    )}: ${`${timer.getSeconds()}`.padStart(2, '0')}`;
    todayShowTime.textContent = formateTimer;
}, 1000);

const calendar_days = document.querySelector('.calendar-days');

calendar_days.addEventListener('click', (e) => {
    if (e.target.tagName.toLowerCase() === 'div') {
        const date = new Date(currentYear.value, currentMonth.value, _.toString(_.parseInt(e.target.textContent) + 1));
        const formattedDate = date.toISOString().slice(0, 10); // Format tanggal YYYY-MM-DD
        const tanggal_dipilih = document.querySelector('.tanggal-dipilih');

        tanggal_dipilih.value = formattedDate;
    }
});


const jamBooking = document.getElementById("jam-booking");
const daftarJamBooking = document.getElementById("daftar-jam-booking");
const jamDipilih = document.querySelector("#jam_booking");

for (let i = 0; i < jamBookingData.length; i++) {
    let jk = document.createElement('button');
    jk.textContent = jamBookingData[i].jam_ke.slice(0, 5);
    daftarJamBooking.append(jk);

    function disabledClick() {
        jk.style.animationName = 'cantBeClcik';
        jk.style.animationDuration = '1s';
    }

    if (jamBookingData[i].status == 1) {
        // jika sudah ada yang memesan
        jk.classList.add(i + 1, 'col-5', 'text-center', 'border', 'btn', 'p-2', 'fs-6', 'm-1');
        jk.style.backgroundColor = 'rgb(218 218 218)';
        jk.style.boxShadow = 'rgba(122, 122, 122, 0.2) 0px 5px 5px 0px';
    }else{
        jk.classList.add(i + 1, 'col-5', 'text-center', 'border', 'btn', 'p-2', 'fs-6', 'm-1');
        jk.style.backgroundColor = 'var(--bs-body-bg)';
        jk.style.boxShadow = 'rgba(100, 100, 111, 0.2) 0px 5px 5px 0px';
    }

    jk.addEventListener('mouseover', function() {
        if (jamBookingData[i].status == 0) {
            this.style.backgroundColor = "#da82e9";
        }
    });

    jk.addEventListener('mouseout', function() {
        if (jamBookingData[i].status == 1) {
            this.style.backgroundColor = "rgb(218 218 218)"; // Kembalikan warna latar belakang menjadi merah muda jika status adalah 1
        } else {
            this.style.backgroundColor = "var(--bs-body-bg)"; // Kembalikan warna latar belakang menjadi hijau jika status bukan 1
        }
    });

    jk.addEventListener('click', function() {
        // Mendapatkan teks konten dari elemen yang diklik
        if (jamBookingData[i].status == 1) {
            jk.style.backgroundColor = '#ff0000ab';
            disabledClick();
        }else{
            let contentJamKe = this.textContent;
            jamDipilih.value = contentJamKe;
            this.style.backgroundColor = "#da82e9";
        }
    });
}

const selectCalendar = document.querySelector(".calendar");
const followWidthFromCalendar = document.querySelector(".width-same-calendar");


followWidthFromCalendar.style.width = getComputedStyle(selectCalendar).width;
followWidthFromCalendar.style.height = getComputedStyle(selectCalendar).height;

const buatJadwalTreatment = document.getElementById('buatJadwalTreatment');
const btnBuatJadwalTreatment = document.getElementById('btnBuatJadwalTreatment');
const btnTutupJadwalTreatment = document.getElementById('btnTutupJadwalTreatment');

buatJadwalTreatment.parentElement.style.position = 'fixed';

buatJadwalTreatment.style.display = 'none';
btnTutupJadwalTreatment.style.display = 'none';

btnBuatJadwalTreatment.addEventListener('click', function() {
    buatJadwalTreatment.style.display = 'block';

    btnTutupJadwalTreatment.style.display = 'block';

    this.style.display = 'none';
});

btnTutupJadwalTreatment.addEventListener('click', function() {
    buatJadwalTreatment.style.display = 'none';
    

    btnBuatJadwalTreatment.style.display = 'block';

    this.style.display = 'none';
});
