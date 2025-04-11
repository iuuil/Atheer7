// Sample nurseries data
const nurseriesData = {
    kerbala: {
        Tree1: [
            { 
                name: "مشتل كربلاء الأول", 
                location: "كربلاء", 
                image: "photos/photo1.jpg" 
            },
            { 
                name: "مشتل كربلاء الثاني", 
                location: "كربلاء", 
                image: "photos/photo44.jpg" 
            },
            { 
                name: "مشتل كربلاء الثالث", 
                location: "كربلاء", 
                image: "photos/photo43.jpg" 
            },
            { 
                name: "مشتل كربلاء الرابع", 
                location: "كربلاء", 
                image: "photos/photo24.jpg" 
            }
        ],
        Tree2: [
            { 
                name: "مشتل كربلاء للأشجار", 
                location: "كربلاء", 
                image: "photos/photo21.jpg" 
            }
        ]
    },
    hilla: {
        Tree3: [
            { 
                name: "مشتل الحلة", 
                location: "الحلة", 
                image: "photos/photo29.jpg" 
            }
        ]
    }
};

// Get references to DOM elements
const citySelect = document.getElementById('city-select');
const treeSelect = document.getElementById('tree-select');
const showNurseriesButton = document.querySelector('.show-nurseries-button');
const nurseryList = document.getElementById('nursery-list');

// Function to display nurseries
function showNurseries() {
    // Get selected city and tree
    const selectedCity = citySelect.value;
    const selectedTree = treeSelect.value;

    // Clear previous nursery list
    nurseryList.innerHTML = '';

    // Validate selections
    if (!selectedCity || !selectedTree) {
        alert('الرجاء اختيار المدينة ونوع الشجرة');
        nurseryList.style.display = 'none';
        return;
    }

    // Check if nurseries exist for selected city and tree
    const cityNurseries = nurseriesData[selectedCity];
    if (!cityNurseries || !cityNurseries[selectedTree]) {
        alert('لا توجد مشاتل متاحة للمدينة والشجرة المختارة');
        nurseryList.style.display = 'none';
        return;
    }

    // Clear previous nursery list with fade out
    nurseryList.style.opacity = '0';

    // Display matching nurseries with staggered animation
    const matchingNurseries = cityNurseries[selectedTree];
    matchingNurseries.forEach((nursery, index) => {
        const nurseryBox = document.createElement('div');
        nurseryBox.classList.add('nursery-box');
        nurseryBox.style.opacity = '0';
        nurseryBox.style.transform = 'translateY(20px)';
        
        nurseryBox.innerHTML = `
            <div class="nursery-image-container">
                <img src="${nursery.image}" alt="${nursery.name}" class="nursery-image">
            </div>
            <div class="nursery-info">
                <h3>${nursery.name}</h3>
                <p>الموقع: ${nursery.location}</p>
            </div>
        `;
        
        nurseryList.appendChild(nurseryBox);
        
        // Staggered animation with delay
        setTimeout(() => {
            nurseryBox.style.transition = 'all 0.5s ease-out';
            nurseryBox.style.opacity = '1';
            nurseryBox.style.transform = 'translateY(0)';
        }, index * 200); // Delay increases with each box
    });

    // Show nursery list with smooth transition
    setTimeout(() => {
        nurseryList.style.display = 'flex';
        nurseryList.style.transition = 'opacity 0.5s ease-in-out';
        nurseryList.style.opacity = '1';

         // Calculate the top position of the campaignsList relative to the document
        const nurseryListTop = nurseryList.getBoundingClientRect().top + window.scrollY;

        // Define the margin you want at the top
        const marginTop = 100; // Adjust this value as needed

        // Scroll to the calculated top position
        window.scrollTo({
            top: nurseryListTop - marginTop,
            behavior: 'smooth'
        });
    }, 100);
}

// Add event listener to search button
showNurseriesButton.addEventListener('click', showNurseries);
