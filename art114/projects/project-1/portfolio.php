<?php
$title = "Portfolio Page";
include 'includes/header2.php';
?>

<div class="inner-container-portfolio">

      <!--Container 1-->
            <div class="inner-container1-portfolio">
                <h2 class="subheading">Total Portfolio Value</h2>
                <p class="tpv2">$32,608.00</p>
                <p class="tpv3">
                    <span>-$560.00 </span> 
                    <span class="decrease">(-1.68%) Today</span>
                </p>
            </div>
                    <!--Container 2-->
            <div class="inner-container2-portfolio">
                <h2 class="subheading">Buying Power</h2>
                <p class="money-top-containers2">$10,520.00</p>
                <div class="buysell-container">
                    <button class="sellbuybutton">SELL</button>
                    <button class="sellbuybutton">BUY</button>
                </div>
            </div>
          <!--Container 4-->
            <div class="inner-container4-portfolio">
                 <h2 class="subheading">Portfolio Performance</h2>
                <div class="portfolioperformance-dates"> 
                <span>1D</span>
                <span class="active">1M</span>
                <span>3M</span>
                <span>1Y</span>
                <span>3Y</span>
                </div>
                <div class="portfolioperformance-second">
                    <div class="portfolioperformance-dates-dollar">
                        <p>$50,000</p>
                        <p>$40,000</p>
                        <p>$30,000</p>
                        <p>$20,000</p>
                        <p>$10,000</p>
                        <p>$0</p>
                    </div>
                    <div class="chart-bg2"> <img src="images/trendline_home.png" alt="">
                    </div>
                </div>
                <div class="line2"></div>
                <div class="portfolioperformance-dates-bottom2">
                    <p>Dec 21, 2025</p>
                    <p class="jan21">Jan 21, 2026</p>
                </div>
            </div>
            <!--Container 3-->
              <div class="inner-container3-portfolio">
                <div class="watchlist-subhead">
  <h2 class="subheading">Positions</h2>  
 <img src="images/sort-by-icon.svg" alt="sort news" class="sort-icon">
</div>
<div class="positions-header">
    <p>Symbol</p>
    <p>Sparkline</p>
    <p>Last price</p>
     <p>Last price change</p>
    <p>Today’s gain/loss $</p>
    <p>Today’s gain/loss %</p>
    <p>Total gain/loss $</p>
    <p>Total gain/loss %</p>
    <p>Current Value</p>
    <p>Shares</p>

</div>
            <div class="scroll-container3">
                    
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">AAPL</p>
                            <p class="positions-name-subtext">Apple</p>
                        </div>
                        <img src="images/apple-sparkline.png" alt="apple sparkline" class="sparkline">
                        <p class="item3-values-00">$245.62</p>
                        <p class="item3-values-01">-$0.62</p>
                        <p class="item3-values-02">-$3.13</p>
                        <p class="item3-values-03">-0.45%</p>
                        <p class="item3-values-04">+$1,029.34</p>
                        <p class="item3-values-05">+24.56%</p>
                        <p class="item3-values-06">$5,320.48</p>
                        <p class="item3-values-07">22.32</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">AMZN</p>
                            <p class="positions-name-subtext">Amazon</p>
                        </div>
                        <img src="images/amazon-sparkline.png" alt="Amazon sparkline" class="sparkline">
                        <p class="item3-values-00">$241.30</p>
                        <p class="item3-values-01">-$0.12</p>
                        <p class="item3-values-02b">+$1.09</p>
                        <p class="item3-values-03b">+0.31%</p>
                        <p class="item3-values-04">+$759.67</p>
                        <p class="item3-values-05">+25.81%</p>
                        <p class="item3-values-06">$4,189.76</p>
                        <p class="item3-values-07">23.04</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">ABNB</p>
                            <p class="positions-name-subtext">Airbnb</p>
                        </div>
                        <img src="images/airbnb-sparkline.png" alt="Airbnb sparkline" class="sparkline">
                        <p class="item3-values-00">$137.41</p>
                        <p class="item3-values-01b">+$0.07</p>
                        <p class="item3-values-02b">+$0.73</p>
                        <p class="item3-values-03">+0.15%</p>
                        <p class="item3-values-04">+$689.12</p>
                        <p class="item3-values-05">+30.22%</p>
                        <p class="item3-values-06">$3,698.22</p>
                        <p class="item3-values-07">31.01</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">GOOGL</p>
                            <p class="positions-name-subtext">Alphabet</p>
                        </div>
                        <img src="images/google-sparkline.png" alt="Google sparkline" class="sparkline">
                        <p class="item3-values-00">$335.62</p>
                        <p class="item3-values-01">-$0.12</p>
                        <p class="item3-values-02b">+$2.27</p>
                        <p class="item3-values-03b">+0.52%</p>
                        <p class="item3-values-04">+$609.89</p>
                        <p class="item3-values-05">+12.36%</p>
                        <p class="item3-values-06">$3,299.15</p>
                        <p class="item3-values-07">9.75</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">MSFT</p>
                            <p class="positions-name-subtext">Microsoft</p>
                        </div>
                        <img src="images/microsoft-sparkline.png" alt="Microsoft sparkline" class="sparkline">
                        <p class="item3-values-00">$481.23</p>
                        <p class="item3-values-01">-$0.90</p>
                        <p class="item3-values-02b">+$4.06</p>
                        <p class="item3-values-03b">+0.20%</p>
                        <p class="item3-values-04">+$539.45</p>
                        <p class="item3-values-05">+20.27%</p>
                        <p class="item3-values-06">$2,899.64</p>
                        <p class="item3-values-07">5.68</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">NKE</p>
                            <p class="positions-name-subtext">Nike</p>
                        </div>
                        <img src="images/nike-sparkline.png" alt="Nike sparkline" class="sparkline">
                        <p class="item3-values-00">$65.66</p>
                        <p class="item3-values-01b">+$0.82</p>
                        <p class="item3-values-02b">+$0.04</p>
                        <p class="item3-values-03b">+0.19%</p>
                        <p class="item3-values-04">+$479.23</p>
                        <p class="item3-values-05">+25.72%</p>
                        <p class="item3-values-06">$2,499.38</p>
                        <p class="item3-values-07">40.12</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">UL</p>
                            <p class="positions-name-subtext">Unilever</p>
                        </div>
                        <img src="images/unilever-sparkline.png" alt="Unilever sparkline" class="sparkline">
                        <p class="item3-values-00">$61.02</p>
                        <p class="item3-values-01">-$1.42</p>
                        <p class="item3-values-02">-$4.03</p>
                        <p class="item3-values-03">-0.55%</p>
                        <p class="item3-values-04">$419.58</p>
                        <p class="item3-values-05">+21.09%</p>
                        <p class="item3-values-06">$1,899.71</p>
                        <p class="item3-values-07">32.12</p>
                    </div>
                    <!--item 1-->
                    <div class="item3">
                        <div class="positions-name">
                            <p class="positions-ticker">PG</p>
                            <p class="positions-name-subtext">Procter...</p>
                        </div>
                        <img src="images/procter-sparkline.png" alt="Procter sparkline" class="sparkline">
                        <p class="item3-values-00">$147.320</p>
                        <p class="item3-values-01b">+$0.71</p>
                        <p class="item3-values-02">-$0.13</p>
                        <p class="item3-values-03">-0.47%</p>
                        <p class="item3-values-04"> +$359.76</p>
                        <p class="item3-values-05">+19.37%</p>
                        <p class="item3-values-06">$1,599.33</p>
                        <p class="item3-values-07">11.04</p>
                    </div>
                    
                </div>
              </div> 
                 <!--Container 5-->
              <div class="inner-container5-portfolio">
                <h2 class="subheading">Asset Allocation</h2>
                <div class="asset-allocation-inner">
                    <div id="chart"></div>
                </div>
            </div>
             <!--Container 6-->
            <div class="inner-container6-portfolio">
                <div class="watchlist-subhead">
  <h2 class="subheading">Recent Transactions</h2>  
  <img src="images/sort-by-icon.svg" alt="sort news" class="sort-icon">
</div>
<div class="transactions-container">
  <table class="recent-transactions">
    <thead>
        <tr>
            <th>Date</th>
            <th>Transaction</th>
            <th>Shares</th>
            <th>Cost per share</th>
            <th>Total</th>
        </tr>

    </thead>
    <tbody>
      <tr>
        <td>01-12-2026</td>
        <td>BUY AMZN</td>
        <td>3.21</td>
        <td>$229.03</td>
        <td>$735.19</td>
      </tr>
      
      <tr>
        <td>01-05-2026</td>
        <td>SELL APPL</td>
        <td>5.0</td>
        <td>$246.78</td>
        <td>$1,233.90</td>
      </tr>
      
      <tr>
        <td>01-02-2026</td>
        <td>BUY META</td>
        <td>1.07</td>
        <td>$604.05</td>
        <td>$646.33</td>
      </tr>
        <tr>
        <td>01-02-2026</td>
        <td>BUY AMZN</td>
        <td>1.052</td>
        <td>$225.36</td>
        <td>$237.08</td>
      </tr>
    </tbody>
  </table>
</div>
            </div>

            <div class="inner-container7-portfolio">
                <div class="watchlist-subhead">
  <h2 class="subheading">Your top and bottom movers</h2>  
</div>
<div class="topandbottom-header">
    <p>Today’s gain/loss </p>
    <p>Last Price</p>

</div>
            <div class="scroll-container4">
                    
                    <!--item 1-->
                    <div class="item4">
                        <div class="positions-name">
                            <p class="positions-ticker">MSFT</p>
                            <p class="positions-name-subtext">Microsoft</p>
                        </div>
                        <p class="topandbottom-01">+$4.06 (+0.20%)</p>
                        <p class="topandbottom-02">$481.23</p>          
                    </div>
                    <!--item 1-->
                    <div class="item4">
                        <div class="positions-name">
                            <p class="positions-ticker">GOOGL</p>
                            <p class="positions-name-subtext">Alphabett</p>
                        </div>
                        <p class="topandbottom-01">+$2.27 (+0.52%)</p>
                        <p class="topandbottom-02">$335.62</p>          
                    </div>
                    <!--item 1-->
                    <div class="item4">
                        <div class="positions-name">
                            <p class="positions-ticker">UL</p>
                            <p class="positions-name-subtext">Unilever</p>
                        </div>
                        <p class="topandbottom-01">+$4.03 (+0.47%)</p>
                        <p class="topandbottom-02">$61.02</p>          
                    </div>


            </div>



<?php include 'includes/footer.php'; ?>