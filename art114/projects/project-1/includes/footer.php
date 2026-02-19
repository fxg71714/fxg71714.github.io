
        </div>
      <div class="side-nav">

      <div class="notif-container" id="notifButton">
  <img src="images/notification_icon.svg" alt="notification icon">
  <div class="notif-popup" id="notifPopup">
    <h2>Notifications</h2>
    <div class="notification-scroll">
      <div class="notification-inner-container">
      <div>
        <p class="notification-ticker">APPL</p>
      </div>
      <div>
        <p class="notification-companyname">Apple, Inc.</p>
        <p class="notification-article">AAPL shares climb 2.4% following strong iPhone sales data.</p>
      </div>
        <p class="notification-time">2hr</p>
    </div>

     <div class="notification-inner-container">
      <div>
        <p class="notification-ticker">IPKH</p>
      </div>
      <div>
        <p class="notification-companyname">IronPeak Holdings</p>
        <p class="notification-article">IronPeak Holdings (IPKH) is preparing for its public offering. IPHK is now...</p>
      </div>
        <p class="notification-time">3hr</p>
    </div>

 <div class="notification-inner-container">
      <div>
        <p class="notification-ticker">HLX</p>
      </div>
      <div>
        <p class="notification-companyname">Heliox.</p>
        <p class="notification-article">Heliox (HLX) is preparing for its public offering. IPHK is now...</p>
      </div>
        <p class="notification-time">8hr</p>
    </div>
    </div>
    


  </div>
</div>

       <div class="icon">
         

        <a href="#" title="Account Profile"><img src="images/account_icon.svg" alt="account icon" class="account-icon"></a>
        <a href="portfolio.php" title="My Portfolio"><img src="images/wallet_icon.svg" alt="my portfolio icon" class="wallet-icon"></a>
      <a href="settings.php" title="Settings">
  <img src="images/settings_icon.svg" alt="settings icon" class="settings-icon">
</a>

        <a href="#" title="Logout"><img src="images/logout_icon.svg" alt="log out icon" class="logout-icon"></a>
        <button id="themeToggle" class="theme-button"></button>
       </div>
    </div>  
    </div>
<script>
  const toggle = document.getElementById("themeToggle");
  const notifButton = document.getElementById('notifButton');
  const notifPopup = document.getElementById('notifPopup');

  // Initialize chart
    var chart = echarts.init(document.getElementById('chart'));

    // Chart configuration options
    var option = {
      tooltip: {
        trigger: 'item',
        formatter: '{b}: {d}%'
      },
      legend: {
        show: false  // hides the legend at the top
      },
      series: [
        {
          name: 'Sector Share',
          type: 'pie',
          radius: ['40%', '70%'],  // makes it a donut
          avoidLabelOverlap: false,
          itemStyle: {
            borderRadius: 10,      // rounded slices
            borderColor: '#fff',
            borderWidth: 2
          },
          label: {
            show: true,
            position: 'outside',
            formatter: '{b}: {d}%' // shows name and percentage
          },
          labelLine: {
            show: true
          },
          data: [
            { value: 51, name: 'Consumer Goods', itemStyle: { color: 'rgba(112,142,255,1)' } },
            { value: 16, name: 'Technology', itemStyle: { color: 'rgba(112,142,255,0.8)' } },
            { value: 15, name: 'Hospitality', itemStyle: { color: 'rgba(112,142,255,0.6)' } },
            { value: 12, name: 'Business', itemStyle: { color: 'rgba(112,142,255,0.4)' } },
            { value: 6,  name: 'Healthcare', itemStyle: { color: 'rgba(112,142,255,0.2)' } }
          ]
        }
      ]
    };

    // Apply the configuration
    chart.setOption(option);
  
  notifButton.addEventListener('click', () => {
  notifPopup.classList.toggle('active');
});

// Optional: click outside to close
document.addEventListener('click', (e) => {
  if (!notifButton.contains(e.target)) {
    notifPopup.classList.remove('active');
  }
});

  // Apply saved theme on load
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
  }

  // Toggle theme on button click
  toggle.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");

    if (document.body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });
</script>
</body>
</html>