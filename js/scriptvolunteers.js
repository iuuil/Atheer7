document.addEventListener('DOMContentLoaded', function() {
    // Get references to DOM elements
    const citySelect = document.getElementById('city-select');
    const showCampaignsButton = document.querySelector('.show-campaigns-button');
    const campaignsList = document.getElementById('campaigns-list');

    // Campaigns data
    const campaignsData = {
        kerbala: [
            { 
                name: "حملة التشجير الأولى", 
                location: "كربلاء",  
                trees: 100,
                image: "photos/photo21.jpg"
            },
            { 
                name: "حملة التشجير الثانية", 
                location: "كربلاء", 
                trees: 150,
                image: "photos/photo42.jpg"
            },
            { 
                name: "حملة التشجير الثالثة", 
                location: "كربلاء", 
                trees: 200,
                image: "photos/photo36.jpg"
            }
        ],
        hilla: [
            { 
                name: "حملة التشجير في الحلة", 
                location: "الحلة", 
                trees: 80,
                image: "photos/photo17.jpg"
            }
        ]
    };

    // Function to show campaigns
    function showCampaigns() {
        // Get selected city
        const selectedCity = citySelect.value;

        // Clear previous campaigns
        campaignsList.innerHTML = '';
        campaignsList.style.display = 'none';
        campaignsList.style.opacity = '0';  // Start with opacity 0

        // Validate city selection
        if (!selectedCity) {
            alert('الرجاء اختيار المدينة');
            return;
        }

        // Get campaigns for selected city
        const cityCampaigns = campaignsData[selectedCity];

        // Show campaigns if exist
        if (cityCampaigns && cityCampaigns.length > 0) {
            cityCampaigns.forEach((campaign, index) => {
                const campaignBox = document.createElement('div');
                campaignBox.classList.add('campaign-box');
                campaignBox.style.opacity = '0'; // Initial opacity
                campaignBox.style.transform = 'translateY(20px)'; // Initial position
                campaignBox.innerHTML = `
                    <div class="campaign-image-container">
                        <img src="${campaign.image}" alt="${campaign.name}" class="campaign-image">
                    </div>
                    <div class="campaign-info">
                        <h3>${campaign.name}</h3>
                        <p>موقع الحملة: ${campaign.location}</p>
                        <p>عدد الأشجار: ${campaign.trees} شجرة</p>
                    </div>
                `;
                campaignsList.appendChild(campaignBox);

                 // Staggered animation with delay
                setTimeout(() => {
                    campaignBox.style.transition = 'all 0.5s ease-out';
                    campaignBox.style.opacity = '1';
                    campaignBox.style.transform = 'translateY(0)';
                }, index * 200); // Delay increases with each box
            });

            // Show campaigns list with smooth transition
            setTimeout(() => {
                campaignsList.style.display = 'flex';
                campaignsList.style.transition = 'opacity 0.5s ease-in-out';
                campaignsList.style.opacity = '1';

                // Calculate the top position of the campaignsList relative to the document
                const campaignsListTop = campaignsList.getBoundingClientRect().top + window.scrollY;

                // Define the margin you want at the top
                const marginTop = 100; // Adjust this value as needed

                // Scroll to the calculated top position
                window.scrollTo({
                    top: campaignsListTop - marginTop,
                    behavior: 'smooth'
                });
            }, 100);
        } else {
            alert('لا توجد حملات متاحة في هذه المدينة');
        }
    }

    // Add event listener to search button
    showCampaignsButton.addEventListener('click', showCampaigns);
});
