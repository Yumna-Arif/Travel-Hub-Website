document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.querySelector('#search-input');
    const resultsContainer = document.querySelector('#search-results');
  
    const searchPages = [
      { title: 'Home', url: 'home.php', keywords: ['main', 'homepage'] },
      { title: 'About Us', url: 'about.php', keywords: ['company', 'info', 'team'] },
      { title: 'Packages', url: 'package.php', keywords: ['deals', 'offers', 'pricing'] },
      { title: 'Book Now', url: 'book.php', keywords: ['booking', 'reservation', 'schedule'] },
      { title: 'Contact Us', url: 'contact_us.php', keywords: ['email', 'phone', 'support'] },
      { title: 'FAQ', url: 'faq.php', keywords: ['questions', 'help', 'answers'] },
      { title: 'Privacy Policy', url: 'privacy.php', keywords: ['data', 'security', 'information'] },
      { title: 'Terms of Use', url: 'terms.php', keywords: ['rules', 'agreement', 'conditions'] },
      { 
        title: 'Beach Paradise', 
        url: 'beach_paradise.php', 
        keywords: ['Kund Malir', 'Makran Coastal Highway', 'Hingol National Park', 'Princess of Hope', 'Balochi sajji', 'beach camping', 'sunset photography', 'coastal drive', 'Arabian Sea', 'Balochistan travel'] 
      },
      { 
        title: 'Mountain Adventure', 
        url: 'mountain_adventure.php', 
        keywords: ['Hunza Valley', 'Karakoram Highway', 'Attabad Lake', 'Baltit Fort', 'Passu Cones', 'Rakaposhi', 'glacier trek', 'mountain views', 'cultural heritage', 'nature photography'] 
      },
      { 
        title: 'Cultural Exploration', 
        url: 'cultural_exploration.php', 
        keywords: ['Badshahi Mosque', 'Lahore Fort', 'Shalimar Gardens', 'Walled City', 'Gawalmandi Food Street', 'Wagah Border', 'Mughal heritage', 'history tour', 'traditional cuisine', 'Minar-e-Pakistan'] 
      },
      { 
        title: 'Safari Experience', 
        url: 'safari_experience.php', 
        keywords: ['Lal Suhanra', 'wildlife safari', 'Cholistan Desert', 'Derawar Fort', 'blackbuck antelope', 'birdwatching', 'desert camping', 'Noor Mahal', 'camel safari', 'Cholistani BBQ'] 
      },
      { 
        title: 'City Lights', 
        url: 'city_lights.php', 
        keywords: ['Clifton Beach', 'Quaid-e-Azam Mausoleum', 'Dolmen Mall', 'Manora Island', 'Do Darya', 'Karachi nightlife', 'shopping', 'coastal city', 'urban exploration', 'street food'] 
      },
      { 
        title: 'Desert Adventure', 
        url: 'desert_adventure.php', 
        keywords: ['Cholistan Desert', 'Derawar Fort', 'desert safari', 'sandboarding', 'camel ride', 'nomadic culture', 'tribal experience', 'jeep rally', 'golden dunes', 'campfire nights'] 
      }
      
    ];

    if (resultsContainer) resultsContainer.style.display = 'none';
  
    if (searchInput) {
      searchInput.addEventListener('input', () => {
        const query = searchInput.value.toLowerCase().trim();
        if (!query) {
          resultsContainer.style.display = 'none';
          resultsContainer.innerHTML = '';
          return;
        }
  
        const matchedPages = searchPages.map(page => {
          // Check for keyword matches
          const matchedKeyword = page.keywords.find(kw => 
            kw.toLowerCase().includes(query)
          );
          
          // Check for title match (partial)
          const titleMatch = page.title.toLowerCase().includes(query) 
            ? page.title.match(new RegExp(query, 'i'))[0] 
            : null;
            
          return {
            ...page,
            matchedKeyword: matchedKeyword || null,
            titleMatch: titleMatch || null
          };
        }).filter(page => 
          page.matchedKeyword || page.titleMatch
        );
  
        if (matchedPages.length === 0) {
          resultsContainer.innerHTML = `<p style="padding: 10px;">No results found.</p>`;
        } else {
          resultsContainer.innerHTML = matchedPages.map(page => {
            // Bold the entire package title
            let displayText = `<strong>${page.title}</strong>`;
            
            // Append matched keyword if found (highlighted)
            if (page.matchedKeyword) {
              displayText += ` — <span style="color: #888; font-style: italic;">${page.matchedKeyword}</span>`;
            }
            
            // Highlight matching portion in title if no keyword match
            else if (page.titleMatch) {
              displayText = page.title.replace(
                new RegExp(page.titleMatch, 'i'), 
                `<span style="color: #888; font-style: italic;">${page.titleMatch}</span>`
              );
              displayText = `<strong>${displayText}</strong>`;
            }
              
            return `<a href="${page.url}" class="search-link">${displayText}</a>`;
          }).join('');
        }
  
        resultsContainer.style.display = 'block';
      });
  
      document.addEventListener('click', (e) => {
        if (!resultsContainer.contains(e.target) && e.target !== searchInput) {
          resultsContainer.style.display = 'none';
        }
      });
    }
});