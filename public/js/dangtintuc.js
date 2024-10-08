let countBedroomInit = 0;
let countBathroomInit = 0;
let countFlatInit = 0;

function countBedroom() {
    countBedroomInit -= 1;
    document.getElementById('text-bedroom').innerHTML = countBedroomInit;
    document.getElementById('minus-bedroom-img').style.background = 'red';
}

// document.getElementById()
class CountBtn {

    count = 0;

    minus(id) {

        if (this.count === 0) {
            return;
        }
        if (this.count === 1)
            document
                .getElementById(id)
                .previousElementSibling.classList.remove('active');
        else
            document
                .getElementById(id)
                .previousElementSibling.classList.add('active');
        this.count--;
        document.getElementById(id).value = this.count;
    }

    plus(id) {
        document.getElementById(id).previousElementSibling.classList.add('active');
        this.count++;
        document.getElementById(id).value = this.count;
    }
}

var bedroom = new CountBtn();
var bathroom = new CountBtn();
var flat = new CountBtn();

document.querySelectorAll('.dangtintuc-image').forEach((item) => {
    item.onclick = () => {
        document
            .querySelector('.dangtintuc-image.active')
            .classList.remove('active');
        item.classList.add('active');
    };
});

//

let progressBar = document.querySelector('.circular-progress');
let valueContainer = document.querySelector('.value-container');
let speed = 10;
const getProgressEndValue = () => {
    return Math.floor(
        (100 / totalLength) *
        document.querySelectorAll(
            'input.ptanh-custom-input:not(:placeholder-shown):not([type="date"]), textarea:not(:placeholder-shown), .ptanh-custom-select.selected'
        ).length
    );
};
const changeProgress = () => {
    const progressEndValue = getProgressEndValue();
    let progressValue = valueContainer.textContent.split('%')[0];
    let progress = setInterval(() => {
        if (progressValue < progressEndValue) progressValue++;
        else if (progressValue > progressEndValue) progressValue--;
        else return;
        valueContainer.textContent = `${progressValue}%`;
        progressBar.style.background = `conic-gradient(
        rgb(224, 60, 49) ${progressValue * 3.6}deg,
        #ECEDF1 ${progressValue * 3.6}deg
        )`;
        if (progressValue == progressEndValue) {
            clearInterval(progress);
        }
    }, speed);
};

const totalLength = document.querySelectorAll(
    'input.ptanh-custom-input:not([type="date"]), textarea, select.ptanh-custom-select'
).length;

$('.ptanh-custom-select').on(
    'changed.bs.select',
    function (e, clickedIndex, isSelected, previousValue) {
        e.currentTarget.parentNode.classList.toggle(
            'selected',
            $(e.currentTarget).val()?.length !== 0
        );
        changeProgress();
        const dependanceName = e.currentTarget.dataset.dependanceName;
        if (dependanceName)
            document
                .querySelectorAll(
                    `select.ptanh-custom-select[data-dependance="${dependanceName}"]`
                )
                .forEach((item) => {
                    // $(item).selectpicker('deselectAll');
                    if (Array.isArray($(item).selectpicker('val')))
                        $(item).selectpicker('deselectAll');
                    else $(item).selectpicker('val', '');
                });
    }
);
document.querySelectorAll('.clear-select-bootstrap').forEach((item) => {
    item.onclick = () => {
        const select = item.previousElementSibling.querySelector('select');
        $(select).selectpicker('val', '');
    };
});

document.querySelectorAll('input, textarea').forEach((input) => {
    input.addEventListener('change', () => {
        changeProgress();
    });
});

const locationValue = document.getElementById('location-value');
const setLoactionValue = () => {
    const value = Array.from(
        document.querySelectorAll(
            '#collapseExample .bootstrap-select.selected select:not(.skip) ~ button .filter-option-inner-inner'
        )
    )
        .reverse()
        .map((item) => item.textContent)
        .join(', ');
    locationValue.value = value;
};

document
    .querySelectorAll('#collapseExample select:not(.skip)')
    .forEach((select) => {
        $(select).on(
            'changed.bs.select',
            (e, clickedIndex, isSelected, previousValue) => {
                setLoactionValue();
            }
        );
    });

const DATA1 = [
    [
        {
            label: 'Bán Nhà',
            value: '11',
        },
        {
            label: 'Bán Đất',
            value: '12',
        },
        {
            label: 'Bán Biệt thự',
            value: '13',
        },
        {
            label: 'Bán BĐS thương mại',
            value: '14',
        },
        {
            label: 'Bán Căn hộ chung cư',
            value: '15',
        },
        {
            label: 'Bán Văn phòng',
            value: '16',
        },
        {
            label: 'Bán BĐS công nghiệp',
            value: '17',
        },
        {
            label: 'Bán BĐS nông nghiệp',
            value: '18',
        },
        {
            label: 'Bán BĐS tâm linh',
            value: '19',
        },
        {
            label: 'Bán BĐS khác',
            value: '20',
        },
        {
            label: 'Bán BĐS dịch vụ',
            value: '21',
        },
    ],
    [
        {
            label: 'Cho thuê Nhà',
            value: '32',
        },
        {
            label: 'Cho thuê Đất',
            value: '33',
        },
        {
            label: 'Cho thuê Căn hộ chung cư',
            value: '34',
        },
        {
            label: 'Cho thuê Văn phòng',
            value: '35',
        },
        {
            label: 'Cho thuê Biệt thự',
            value: '36',
        },
        {
            label: 'Cho thuê BĐS thương mại',
            value: '37',
        },
        {
            label: 'Cho thuê BĐS công nghiệp',
            value: '38',
        },
        {
            label: 'Cho thuê BĐS nông nghiệp',
            value: '39',
        },
        {
            label: 'Cho thuê BĐS tâm linh',
            value: '40',
        },
        {
            label: 'Cho thuê BĐS khác',
            value: '41',
        },
        {
            label: 'Cho thuê BĐS dịch vụ',
            value: '118',
        },
    ],
    [

        {
            label: 'Sang nhượng mặt bằng',
            value: '23',
        },
        {
            label: 'Sang nhượng Matxa-Spa',
            value: '24',
        },
        {
            label: 'Sang nhượng Karaoke, bar',
            value: '25',
        },
        {
            label: 'Sang nhượng Khách sạn - Nhà nghỉ',
            value: '26',
        },
        {
            label: 'Sang nhượng Căn hộ khách sạn - Condotel',
            value: '27',
        },
    ],
];

const formatHtml1 = (data) => {
    return data
        .map((item) => `<option value=${item.value}>${item.label}</option>`)
        .join('');
};

$('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
    console.log('sadjhoisdj');
    const checkedValue = event.target.dataset.value;
    const data = DATA1[Number(checkedValue) - 1];
    const html = formatHtml1(data);
    document.getElementById('render-html').innerHTML = html;
    $('#render-html').selectpicker('refresh');
});


