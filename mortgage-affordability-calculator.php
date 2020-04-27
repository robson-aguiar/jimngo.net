<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mortgage Affordability Calculator - FHA VA Conventional USDA</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="Mortgage calculator, mortgage affordability Calculator, FHA VA Conventional Loan, debt to income ratio">
    <meta name="description"
        content="Use my mortgage affordability calculator to estimate how much home you can afford based on your income and debt - VA, FHA, Convention, USDA, and Jumbo Loan.">
    <meta name="subject" content="Mortgage Calculator, Affordability, Home Loan Prequalification">
    <meta name="language" content="English">
    <meta name="robots" content="index,follow">
    <meta name="author" content="Jim Ngo" />
    <meta name="copyright" content="Jim Ngo" />
    <meta property="og:url" content="https://www.jimngo.net/mortgage-affordability-calculator" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="How Much House Can I Afford | Income Requirement Calculator" />
    <meta property="og:description"
        content="Use my mortgage affordability calculator to estimate how much home you can afford based on your income and debt - VA, FHA, Convention, USDA, and Jumbo Loan." />
    <meta property="og:image" content="image/Gift Fund.jpg" />
    <link rel="canonical" href="https://www.jimngo.net/mortgage-affordability-calculator">
    <link rel="icon" href="image/favicon-16x16.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="style/style.min.css">
    <link rel="stylesheet" href="style/fontawesome-free-5.11.1-web/css/all.min.css">
</head>

<body>
    <?php include('include/title.php'); ?>
    <!-- Page Description -->
    <main>
        <div class="main">
            <div class="flex-perfect-center">
                <!-- About Me ------------------------------------------------>
                <div class="col-3 col-s-4 light-gray radius-5">
                    <?php include('include/about.php'); ?>
                </div>
                <!-- Page Description ---------------------------------------->
                <div class="col-9 col-s-8">
                    <h1 style="color: dodgerblue">Mortgage Affordability Calculator</h1>
                    <h2 style="color: dodgerblue">FHA, VA, Conventional, USDA, and JUMBO Loans</h2>
                    <h3 style="color: dodgerblue">
                        • How Much House Can I Afford?<br />
                        • What's My Debt to Income Ratio?<br />
                        • Calculate My Monthly Payment with Mortgage Insurance and Tax.</h3>
                    <p>In addition to your credit score and your loan-to-value (LTV) ratio, your <a
                            href="https://www.jimngo.net/debt-to-income-ratio" target="_blank"><i>Debt To Income (DTI)
                                Ratio</i></a> is an important part of your overall financial health. Calculating your
                        DTI may help you determine how comfortable you are with your current debt, and also decide
                        whether applying for credit is the right choice for you.</p>
                    <p>When you apply for credit, lenders evaluate your DTI to help determine whether you can afford to
                        take on another payment. Your debt-to-income ratio (DTI) compares how much you owe each month to
                        how much you earn. Specifically, it’s the percentage of your gross monthly income (before taxes)
                        that goes towards payments for rent, mortgage, credit cards, or other debt.</p>
                </div>
            </div>
            <div class="flex-center">
                <!-- Front DTI ----------------------------------------------->
                <div class="col-4 col-s-6">
                    <div class="card-header">Housing Ratio (Front)</div>
                    <div class="card-body">
                        <p>This ratio compares your <i>Housing Expenses</i> to your <i>Monthly Income</i>. Your
                            housing expenses include:</p>
                        <ul>
                            <li>Principal and Interest.</li>
                            <li>Property Tax.</li>
                            <li><a href="https://www.jimngo.net/mortgage-insurance" target="_blank"><i>Mortgage
                                        Insurance Premium</i></a>.</li>
                            <li>Hazard Insurance.</li>
                            <li>HOA Fees.</li>
                            <li>Special Assessments and Payments for any acceptable secondary financing.</li>
                        </ul>
                    </div>
                </div>
                <!-- Back DTI ------------------------------------------------>
                <div class="col-4 col-s-6">
                    <div class="card-header">Debt To Income Ratio (Back)</div>
                    <div class="card-body">
                        <p>This ratio compares your <i>Monthly Debts</i> plus your <i>Housing Expenses</i> to
                            your <i>Monthly Income</i>. Your monthly debts include:</p>
                        <ul>
                            <li>Auto Loan</li>
                            <li>Student Loan</li>
                            <li>Installment Loan</li>
                            <li>Revolving Account</li>
                            <li>Other Debt</li>
                        </ul>
                    </div>
                </div>
                <div class="col-4 col-s-12">
                    <div class="card-header">Pre-qualification Made Easy</div>
                    <div class="card-body">
                        <ul>
                            <li>Simply select the loan program, down payment, expected rate of interest, lender's
                                required debt ratios, your income and liability information, and my calculator will
                                compute how much home you can afford.</li>
                            <li>Lower ratios are more favorable.</li>
                            <li><span style="color: lightgreen">Conservative ratios are 31(front) and 43(back).</span>
                            </li>
                            <li><span style="color:lightgreen">Aggressive ratios are 37(front) and 47(back).</span></li>
                            <li>Some loan program will allow DTI ratio to go up to 50% with automated underwriting, but
                                anything above that will likely be denied.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Affordable Calculator ----------------------------------------------->
    <section class='calculator' id="calculator">
        <div id="afford-calc-widget">
            <div class="banner dark-cerulean font-large" id='calc-ss'>
                <h2 class="slide showing">Home Affordability Calculator</h2>
                <h2 class="slide">Mortgage Pre Approval</h2>
                <h2 class="slide">FHA Loan Affordability</h2>
                <h2 class="slide">VA Loan Affordability</h2>
                <h2 class="slide">Down Payment Assistance</h2>
                <h2 class="slide">First Time Homebuyer</h2>
                <h2 class="slide">Calculate Home Affordability</h2>
                <h2 class="slide">How Much Home Can I Afford?</h2>
                <h2 class="slide">How Much Home Do I Qualify For?</h2>
            </div>
            <div class="main flex-center">
                <!-- Affordable Calculator Widget -------------------------------->
                <div class="col-6 col-s-6">
                    <div class="card-header">Mortgage Affordable Calculator</div>
                    <!-- Slide 1 - Begin Calculator -->
                    <div class="widget-slide medium" id="slide-1">
                        <div class="card-body">
                            <p style="font-size: 125%;">How Much Can I Afford?</p>
                            <p>Many potential home buyers overestimate the down payment and credit scores needed to
                                qualify for a mortgage today. If you are ready and willing to buy, you may be pleasantly
                                surprised at your ability to do so.</p>
                            <ul>
                                <li>Calculate how much home you can afford.</li>
                                <li>Calculate your monthly payment.</li>
                                <li>Compare loan options.</li>
                                <li>Understand what debt to ratio means to lenders.</li>
                                <li>Show seller you can move faster and with confidence in competitive markets</li>
                            </ul>
                            <div class="flex-center"><button class="widget-submit-btn"
                                    onclick="show_slide('loan-info')">Get
                                    Started</button></div>
                        </div>
                    </div>
                    <!-- Slide 2 - Loan Information -->
                    <div class="widget-slide medium" id="loan-info">
                        <div class="card-body">
                            <!-- Loan Program -->
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Loan Program:</div>
                                <select class="inputValue" id="mySelect" onchange="get_input()">
                                    <option value="FHA" selected>FHA</option>
                                    <option value="VA">VA</option>
                                    <option value="Conventional">Conventional</option>
                                    <option value="USDA">USDA</option>
                                    <option value="Jumbo">Jumbo</option>
                                </select>
                            </div>
                            <!-- Loan Term -->
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Loan Term:</div>
                                <select class="inputValue" id="mySelect2" onchange="get_input()">
                                    <option value="15">15 Years</option>
                                    <option value="30" selected>30 Years</option>
                                </select>
                            </div>
                            <div class="flex-center">
                                <button class="widget-submit-btn" onclick="show_slide('slide-1')">Back</button>
                                <button class="widget-submit-btn"
                                    onclick="show_slide('expected-interest-rate')">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 3 - Expected Interest Rate -->
                    <div class="widget-slide medium" id="expected-interest-rate">
                        <div class="card-body">
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Expected Interest Rate:</div>
                                <div class="inputValue"><span id="APR%"></span> %</div>
                            </div>
                            <div class="sliderContainer"><input id="apr" class="slider" max="10" min="1" step="0.125"
                                    type="range" value="5" oninput="get_input()" /></div>
                            <ul>
                                <li>Interest Rates will vary with borrower's credit history, loan to value, loan
                                    program, type of property, etc...</li>
                                <li>You won't know your actual interest rate until the lender has review, underwrite,
                                    and approve your loan.</li>
                                <li>To get an idea of how much home you can afford at this time, please enter an
                                    expected interest rate.</li>
                            </ul>
                            <p></p>
                            <div class="flex-center">
                                <button class="widget-submit-btn" onclick="show_slide('loan-info')">Back</button>
                                <button class="widget-submit-btn" onclick="show_slide('down-payment')">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 4 - Down Payment -->
                    <div class="widget-slide medium" id="down-payment">
                        <div class="card-body">
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Down Payment:</div>
                                <div class="inputValue"><span id="DP%"></span> %</div>
                            </div>
                            <div class="sliderContainer"><input id="dp" class="slider" max="50" min="0.0" step="0.5"
                                    type="range" value="3.5" oninput="get_input()" /></div>
                            <p>Please enter your down payment percent:</p>
                            <ul>
                                <li>FHA - 3.5% minimum</li>
                                <li>Conventional - 3.0% minimum</li>
                                <li>VA - No Down Payment is required</li>
                                <li>USDA - No Down Payment is required</li>
                                <li>Jumbo - Typically 10% down or more</li>
                            </ul>
                            <!-- LTV -->
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Loan-to-value ratio (LTV):</div>
                                <div class="inputValue"><span id="LTV"></span>%</div>
                            </div>
                            <p>Your loan-to-value ratio is the most limiting factor on the price of a home you can
                                purchase. Increasing your down payment will allow you to increase the price of the home
                                you can afford.</p>
                            <div class="flex-center">
                                <button class="widget-submit-btn"
                                    onclick="show_slide('expected-interest-rate')">Back</button>
                                <button class="widget-submit-btn"
                                    onclick="show_slide('mortgage-insurance')">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 5 - Mortgage Insurance -->
                    <div class="widget-slide medium" id="mortgage-insurance">
                        <div class="card-body">
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Mortgage Insurance:</div>
                                <div class="inputValue"><span id="MI%"></span> %</div>
                            </div>
                            <div class="sliderContainer"><input id="mi" class="slider" max="1.0" min="0.5" step="0.05"
                                    type="range" value="0.75" oninput="get_input()" /></div>
                            <p>Mortgage Insurance is required for down payment less than 20% and it's typically between
                                0.5% to 1.0% of the loan amount:</p>
                            <ul>
                                <li>FHA - Mortgage Insurance includes an Upfront Funding Fee of 1.75% of the loan
                                    amount, typically financed into the loan, and an annual insurance premium of 0.85%,
                                    which will be lumped into the monthly payment. For down payment of 5% or more, the
                                    annual insurance premium will be 0.80%.</li>
                                <li>VA - No Mortgage Insurance</li>
                                <li>Conventional - Typically between 0.5% to 1.0% of the loan amount.</li>
                                <li>USDA - 1% Upfront Funding Fee, paid at closing and typically financed into the loan.
                                    Mortgage Insurance annual fee of 0.35% of the loan amount, lumped into the monthly
                                    payment and is paid for the life of the loan.</li>
                            </ul>
                            <div class="flex-center">
                                <button class="widget-submit-btn" onclick="show_slide('down-payment')">Back</button>
                                <button class="widget-submit-btn" onclick="show_slide('lenders_dti_info')">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 6 - Lender's Required Ratios -->
                    <div class="widget-slide slow" id="lenders_dti_info">
                        <div class="card-body">
                            <p style="font-size: 125%;">Lender's Qualifying Ratios</p>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Housing Ratio:</div>
                                <div class="inputValue"><span id="EFR"></span> %</div>
                            </div>
                            <div class="sliderContainer"><input id="efr" type="range" class="slider" min="0" max="50"
                                    step="1" value="37" oninput="get_input()" /></div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Debt To Income Ratio:</div>
                                <div class="inputValue"><span id="EBR"></span> %</div>
                            </div>
                            <div class="sliderContainer"><input id="ebr" type="range" class="slider" min="0" max="50"
                                    step="1" value="47" oninput="get_input()" /></div>
                            <div class="flex-center">
                                <button class="widget-submit-btn"
                                    onclick="show_slide('mortgage-insurance')">Back</button>
                                <button class="widget-submit-btn" onclick="show_income_source()">Next</button>
                            </div>
                            <!-- Lenders DTI explained -->
                            <p>Understanding what your debt to income ratio means is just one of the very first
                                steps you should take on your path to getting a mortgage. Once you can see how much
                                each of your debts affects your ability to get a home loan, you can either refinance
                                those debts into loans with better terms or work extra hard to pay them down before
                                approaching a mortgage lender.</p>
                            <p>What your debt ratio means to Lenders:</p>
                            <div class="flex-center" id="dti_messages">
                                <button class="btnSm-dti-1" onclick="show_dti_message('dti_message_1')">35% or
                                    less</button>
                                <button class="btnSm-dti-2" onclick="show_dti_message('dti_message_2')">36% to
                                    49%</button>
                                <button class="btnSm-dti-3" onclick="show_dti_message('dti_message_3')">50% or
                                    more</button>
                                <!-- DTI message 1 ----------------------------------------->
                                <div class="message border fast" id="dti_message_1"
                                    style="background-color:#238823; color:white;">
                                    <strong>35% or less</strong>
                                    <ul style="text-align: left">
                                        <li>Relative to your income, your debt is at a manageable level.</li>
                                        <li>You most likely have money left over for saving or spending after you’ve
                                            paid
                                            your bills.</li>
                                        <li>Lenders generally view a lower DTI as favorable.</li>
                                    </ul>
                                </div>
                                <!-- DTI message 2 ----------------------------------------->
                                <div class="message border fast" id="dti_message_2"
                                    style="background-color:#fad052; color:black; display: none">
                                    <strong>36% to 49%</strong>
                                    <ul>
                                        <li>You’re managing your debt adequately, but you may want to consider lowering
                                            your DTI. This could put you in a better position to handle unforeseen
                                            expenses.
                                        </li>
                                        <li>If you’re looking to borrow, keep in mind that lenders may ask for
                                            additional eligibility criteria.</li>
                                    </ul>
                                </div>
                                <!-- DTI message 3 ----------------------------------------->
                                <div class="message border fast" id="dti_message_3"
                                    style="background-color:#D2222D; color:white; display: none">
                                    <strong>50% or more</strong>
                                    <ul>
                                        <li>You may have limited funds to save or spend.</li>
                                        <li>With more than half your income going toward debt payments, you may not have
                                            much money left to save, spend, or handle unforeseen expenses.</li>
                                        <li>With this DTI ratio, lenders may limit your borrowing options.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 7 - Income -->
                    <div class="widget-slide medium" id="income_info">
                        <div class="card-body">
                            <p style="font-size: 125%;" id="income-source"></p>
                            <!-- Employment Type -->
                            <div class="inputTitleContainer" id="q2">
                                <div class="inputTitle">Type of Employment</div>
                                <select class="inputValue" id="a2" onchange="get_employment_type()">
                                    <option value="Hourly" selected>Hourly</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Semi-Weekly">Semi-Weekly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Annually">Annually</option>
                                    <option value="1099 Employee">1099 Employee</option>
                                    <option value="Self-Employed">Self-Employed</option>
                                </select>
                            </div>
                            <!-- Hourly Pay -->
                            <div class="incomeField" id="q3">
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">Hourly Rate</div>
                                    <input type="number" class="inputValue" id="a3a" min="0" max="100">
                                </div>
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">Hours Per Week</div>
                                    <input type="number" class="inputValue" id="a3b" min="0" max="100">
                                </div>
                            </div>
                            <!-- Weekly Pay -->
                            <div class="incomeField inputTitleContainer" id="q4">
                                <div class="inputTitle">Weekly rate</div>
                                <input type="number" class="inputValue" id="a4" min="0" max="10000">
                            </div>
                            <!-- Semi-Weekly Pay -->
                            <div class="incomeField inputTitleContainer" id="q5">
                                <div class="inputTitle">Semi-Weekly rate</div>
                                <input type="number" class="inputValue" id="a5" min="0" max="20000">
                            </div>
                            <!-- Monthly Pay -->
                            <div class="incomeField inputTitleContainer" id="q6">
                                <div class="inputTitle">Monthly Salary</div>
                                <input type="number" class="inputValue" id="a6" min="0" max="50000">
                            </div>
                            <!-- Annual Pay-->
                            <div class="incomeField inputTitleContainer" id="q7">
                                <div class="inputTitle">Annual Salary</div>
                                <input type="number" class="inputValue" id="a7" min="0" max="500000">
                            </div>
                            <!-- OT & Bonuses -->
                            <div class="incomeField" id="q8">
                                Overtime and Bonuses typically require a history of 2 years, likely to continue, and
                                averaged over 24 months.
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">OT & Bonuses 2018</div>
                                    <input type="number" class="inputValue" id="a8a" min="0" max="500000">
                                </div>
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">OT & Bonuses Income 2017</div>
                                    <input type="number" class="inputValue" id="a8b" min="0" max="500000">
                                </div>
                                Regular income is verified by paycheck stubs and W2 forms. Income must be documented to
                                have at least a two year history. This timeline is valid for all sources of income. If
                                someone has only worked for one and a half-years, that individual will have to wait
                                until the two year period has passed. Documentation of the two year period means
                                providing the last two years of W2 forms. The income reported on the forms must somewhat
                                match up with the amounts reported on the paycheck stubs. The paycheck stubs will have
                                both regular pay listed for that pay period as well as a year-to-date amount.
                            </div>
                            <!-- 1099 & Schedule C -->
                            <div class="incomeField" id="q9">
                                Variable incomes from Part Time, Independent Contractor, or Sole Proprietor typically
                                require a history of 2 years, likely to continue, and averaged over 24 months.
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">Net Variable Income 2018</div>
                                    <input type="number" class="inputValue" id="a9a" min="0" max="500000">
                                </div>
                                <div class="inputTitleContainer">
                                    <div class="inputTitle">Net Variable Income 2017</div>
                                    <input type="number" class="inputValue" id="a9b" min="0" max="500000">
                                </div>
                            </div>
                            <!-- Add Income -->
                            <div class="flex-center">
                                <button class="widget-submit-btn" id="remove" onclick="clear_inc_source()"
                                    style="display: none">Remove
                                    Income</button>
                                <button class="widget-submit-btn" onclick="calc_inc_source()">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 8 - Income Summary -->
                    <div class="widget-slide medium" id="income-summary">
                        <div class="card-body">
                            <div class="card-body">
                                <div class='income-source' id="I1">
                                    <p><a onclick="show_income_1()"><span
                                                style="font-size: 125%; cursor: pointer">Income 1:
                                            </span></a>
                                        $<span id="inc_1">0</span></p>
                                    <ul>
                                        <li>Regular Pay: $<span id="i1_w2">0.00</span></li>
                                        <li>Variable Pay: $<span id="i1_vp">0.00</span></li>
                                    </ul>
                                </div>
                                <p>Please click on the following links if you would like to add more income</p>
                                <div id="I2">
                                    <p><a onclick="show_income_2()" style="font-size: 125%; cursor: pointer">Income 2:
                                        </a>
                                        $<span id="inc_2">0</span></p>
                                    <div id="income-2-details">
                                        <ul>
                                            <li>Regular Pay: $<span id="i2_w2">0.00</span></li>
                                            <li>Variable Pay: $<span id="i2_vp">0.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="I3">
                                    <p><a onclick="show_income_3()" style="font-size: 125%; cursor: pointer">Income 3:
                                        </a>
                                        $<span id="inc_3">0</span></p>
                                    <div id="income-3-details">
                                        <ul>
                                            <li>Regular Pay: $<span id="i3_w2">0.00</span></li>
                                            <li>Variable Pay: $<span id="i3_vp">0.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="I4">
                                    <p><a onclick="show_income_4()" style="font-size: 125%; cursor: pointer">Income 4:
                                        </a>
                                        $<span id="inc_4">0</span></p>
                                    <div id="income-4-details">
                                        <ul>
                                            <li>Regular Pay: $<span id="i4_w2">0.00</span></li>
                                            <li>Variable Pay: $<span id="i4_vp">0.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="I5">
                                    <p><a onclick="show_income_5()" style="font-size: 125%; cursor: pointer">Income 5:
                                        </a>
                                        $<span id="inc_5">0</span></p>
                                    <div id="income-5-details">
                                        <ul>
                                            <li>Regular Pay: $<span id="i5_w2">0.00</span></li>
                                            <li>Variable Pay: $<span id="i5_vp">0.00</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="flex-center">
                                    <button class="widget-submit-btn"
                                        onclick="show_slide('liability_info')">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 9 - Liability -->
                    <div class="widget-slide medium" id="liability_info">
                        <div class="card-body">
                            <p style="margin: 10px;">Please enter your monthly liability payments from auto loans,
                                student loans, credit card payments, time-share payments, personal loan payments, child
                                support payments, alimony payments, any co-signed loan monthly payments, and any other
                                debt payment.</p>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Auto Loan:</div>
                                <div class="inputValue">$<input type="number" id="auto_loan" min="0" max="10000"
                                        pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Student Loan:</div>
                                <div class="inputValue">$<input type="number" id="student_loan" min="0" max="10000"
                                        pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Installment Loan:</div>
                                <div class="inputValue">$<input type="number" id="installment_loan" min="0" max="10000"
                                        pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Revolving Account:</div>
                                <div class="inputValue">$<input type="number" id="revolving_account" min="0" max="10000"
                                        pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Other Debt:</div>
                                <div class="inputValue">$<input type="number" id="other_debt" min="0" max="10000"
                                        pattern="[0-9]*">
                                </div>
                            </div>
                            <div class="flex-center">
                                <button class="widget-submit-btn" onclick="show_income_source()">Back</button>
                                <button class="widget-submit-btn" onclick="update_liability()">Next</button>
                            </div>
                        </div>
                    </div>
                    <!-- Slide 10 - Calculation Results -->
                    <div class="widget-slide medium" id="calc-results">
                        <div class="card-body">
                            <!-- Your Affordable Home Value -->
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Qualified Home Value:</div>
                                <div class="inputValue">$<span id="HV"></span></div>
                            </div>
                            <!-- Mortgage Details -->
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Down Payment:</div>
                                <div class="inputValue">$<span id="DP"></span></div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Loan Amount:</div>
                                <div class="inputValue">$<span id="P"></span></div>
                            </div>
                            <div class="inputTitleContainer">
                                <div class="inputTitle">Housing Expenses:</div>
                                <div class="inputValue">$<span id="MP"></span></div>
                            </div>
                            <ul>
                                <li>Principal & Interest: $<span id="M"></span></li>
                                <li>Property Tax: $<span id="T"></span></li>
                                <li>Mortgage Insurance: $<span id="I"></span></li>
                                <li>Homeowner Insurance: $<span id="HOI"></span></li>
                            </ul>
                            <div id="loanMaxNote">Warning: Loan amount may exceed conforming loan
                                limit, which varies by county. Please check with your county to confirm the loan limits.
                                Loans exceeding these limits are considered Jumbo Loans:
                                <ul>
                                    <li><a href="https://entp.hud.gov/idapp/html/hicostlook.cfm" rel="nofollow"
                                            target="_blank">FHA Loan
                                            Limit</a></li>
                                    <li><a href="https://www.benefits.va.gov/HOMELOANS/purchaseco_loan_limits.asp"
                                            target="_blank">VA Loan
                                            Limit</a></li>
                                    <li><a href="https://www.fhfa.gov/DataTools/Downloads/Pages/Conforming-Loan-Limits.aspx"
                                            rel="nofollow" target="_blank">Convention Loan Limit</a></li>
                                </ul>
                            </div>
                            <div id="jumboLoan">Warning: Jumbo loans are for loans with amount
                                higher than conforming limit, which varies by counties. Please visit <a
                                    href="https://www.fhfa.gov/DataTools/Downloads/Pages/Conforming-Loan-Limits.aspx"
                                    rel="nofollow" target="_blank">FHFA</a> to check for the loan limit in your county.
                            </div>
                            <!-- User's Input Income & Debt -->
                            <div class="inputTitleContainer">
                                <a class="inputTitle" onclick="show_income_source()"
                                    style="font-size: 125%; cursor: pointer">Monthly Income:</a>
                                <div class="inputValue">$<span id="total-income"></span></div>
                            </div>
                            <div class="inputTitleContainer">
                                <a class="inputTitle" onclick="show_slide('liability_info')"
                                    style="font-size: 125%; cursor: pointer">Monthly Debt:</a>
                                <div class="inputValue">$<span id="ML"></span></div>
                            </div>
                            <div class="flex-center">
                                <button class="widget-submit-btn" onclick="start_over()">Start Over</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Loan Programs ----------------------------------------------->
                <div class="col-6 col-s-6">
                    <?php include('include/loan-programs.php'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php include('include/disclaimer.php'); ?>
    <?php include('include/footer.php'); ?>
    <script src="javascript/afford-calc-Ob.js" async></script>
</body>

</html>