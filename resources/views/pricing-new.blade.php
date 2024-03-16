<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- This meta tag suggests the browser to use HTTPS and enforce it for 1 year -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">


    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600" rel="stylesheet"> --}}
    <title>Pricing Page</title>
</head>
<style>
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
    }

    .accordion-main {
        position: sticky;
        top: 0;
    }

    body,
    html {
        /* font-family:  */
        /* font-family: 'Poppins', sans-serif!important; */
    }

    .accordion-header {
        cursor: pointer;
        background-color: #f0f0f0;
        padding: 10px;
        display: flex;
        align-items: center;
        border: 1px solid #ccc;
        position: sticky;
        top: 218px;
    }

    @media(width<992px) {
        .accordion-header {
            top: 295px;
        }
    }

    @media(width<768px) {
        .accordion-header {
            top: 349px;
        }
    }

    @media(width<500px) {
        .accordion-header {
            top: 212px;
        }
    }

    .accordion-icon {
        font-size: 20px;
    }

    .accordion-main table,
    .accordion-main table td {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }

    .accordion-main table td {
        padding: 1rem;
    }

    tr td:not(:first-child) {
        text-align: center !important;
    }

    @media (width<500px) {
        .accordion-main table td {
            padding: 0.5rem;
        }
    }

    .switch {
        font-size: 17px;
        position: relative;
        display: inline-block;
        width: 3.5em;
        height: 2em;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        border: 1px solid #adb5bd;
        transition: 0.4s;
        border-radius: 30px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 1.4em;
        width: 1.4em;
        border-radius: 20px;
        left: 0.27em;
        bottom: 0.25em;
        background-color: #adb5bd;
        transition: 0.4s;
    }

    input:checked+.slider {
        background-color: #f75949;
        border: 1px solid #f75949;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #f75949;
    }

    input:checked+.slider:before {
        transform: translateX(1.4em);
        background-color: #fff;
    }

    .grid-card {
        display: grid;
        gap: 0.4rem;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }

    .grid-card .card-header {
        padding-block: 1rem !important;
    }

    .card {
        cursor: pointer;
        border: 2px solid transparent !important;
    }

    .active-card {
        /* transform: scale(1.04); */
        border: 2px solid #575757 !important;
        box-shadow: 0 10px 0 0 #575757 !important;
    }

    .active-card .card-header {
        /* background-color: #222 !important;
        color: #eee !important; */
    }

    .card {
        transition: all 400ms;
    }

    .plan_contents table,
    .plan_contents table td {
        border: 1px solid #ccc;
        border-collapse: collapse;
    }

    .plan_contents table td {
        padding: 1rem;
    }

    .plan_contents .plans_price {
        font-size: 20px;
    }

    @media (width<500px) {
        .grid-card {
            grid-template-columns: repeat(4, 250px);
            overflow-x: auto;
            padding: 0 1rem 1rem 1rem;
        }

        .plan_contents .plans {
            font-size: 10px;
        }

        .plan_contents .plans_price {
            font-size: 14px;
        }

        .plan_contents table td {
            padding: 0.5rem;
        }
    }

    .plans {
        text-transform: uppercase;
    }

    .line,
    .annual,
    .annualTable,
    .annualTablemobile {
        opacity: 0;
    }

    input[type="checkbox"]:focus {
        box-shadow: none !important;
    }

    .acc_table .bi-check2-circle {
        color: green;
        font-size: 20px;
    }

    @media(width<500px) {
        .acc_table .bi-check2-circle {
            font-size: 18px;
        }
    }

    .acc_table {
        table-layout: fixed;
        width: 100%;
    }

    .acc_table tr td {
        width: 25%;
    }

    .acc_table tr td:first-child {
        width: 34%;
    }

    @media(width<500px) {
        .acc_table tr td:first-child {
            width: 50%;
        }
    }

    .btn-primary {
        background-color: #f75949 !important;
    }

    .btn-primary:hover {
        box-shadow: 0 8px 25px -8px #f75949;
        border-color: #f75949 !important;
    }

    .btn-outline-dark:hover {
        box-shadow: 0 8px 25px -8px #ccc;
        background-color: #fff;
        color: #222;
    }

    .premium {
        position: relative;
        z-index: 1;
    }

    .premium::before {
        content: 'Most popular';
        position: absolute;
        top: 5px;
        right: -30px;
        z-index: 2;
        background-color: #48f495;
        padding-inline: .4rem;
        border-top-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
        border-bottom-right-radius: 1rem;
        color: #333;
    }

    .reverse::before {
        transform: scaleX(-1);
    }
</style>

<body class="bg-light">
    @include('header')

    <div class="container my-4">
        <div class="pricing_card mt-2 mb-5">
            <div class="text-center">
                <h1 class="fw-bold">
                    <span style="color: #f75949">Flexible </span>
                    <span class="text-dark">Plans</span>
                </h1>
                <h2 class="fw-bold">for every billing requirement</h2>
            </div>
            <div class="d-flex justify-content-end align-items-center" style="gap: 0.5rem">
                <span>Monthly</span>
                <label class="switch">
                    <input type="checkbox" id="priceSwitch" />
                    <span class="slider"></span>
                </label>
                <span>Yearly</span>
                {{-- <span style="color: #f75949" class="font-italic">(Save upto 25%)</span> --}}
            </div>
            {{-- {{ $plans }} --}}
            <div class="grid-card mt-2">
                @foreach ($plans as $plan)
                    <div class="card {{ strtolower($plan->type) }} {{ $plan->id === 3 ? 'active-card' : '' }} shadow border-0 text-center my-2 mb-md-0"
                        onclick="handleCardClick({{ strtolower($plan->type) }})">
                        <div class="card-header border-0 bg-white justify-content-center text-uppercase fs-5 fw-bold">
                            {{ ucfirst($plan->type) }} </div>
                        <div class="card-body px-0 pt-0">
                            <div class="px-2 py-3">
                                @if ($plan->id === 1)
                                    <p class="px-1 pt-3 plan_desc" style="font-size: 15px">
                                        {{-- For businesses wanting to streamline their billing operations. --}}
                                        Automate and optimize your sales cycle


                                    </p>
                                @elseif ($plan->id === 2)
                                    <p class="px-1 pt-3 plan_desc" style="font-size: 15px">
                                        {{-- For businesses wanting to streamline their billing operations. --}}
                                        Improve customer acquisition and accelerate growth


                                    </p>
                                @elseif ($plan->id === 3)
                                    <p class="px-1 pt-3 plan_desc" style="font-size: 15px">
                                        {{-- For businesses wanting to streamline their billing operations. --}}
                                        Manage global CX operations with the complete CRM


                                    </p>
                                @elseif ($plan->id === 4)
                                    <p class="px-1 pt-3 plan_desc" style="font-size: 15px">
                                        {{-- For businesses wanting to streamline their billing operations. --}}
                                        Scale exponentially with dedicated BI capabilities


                                    </p>
                                    <p class="text-muted mb-0">
                                        &nbsp;
                                    </p>

                                    <div class="d-flex justify-content-center align-items-center"
                                        style="    margin-bottom: 13px;">
                                        <span class="fw-bold monthlyPrices" style="font-size: 20px;">
                                            as per client Requirements
                                        </span>
                                        {{-- <span class="text-muted org" style="font-size:15px"></span> --}}
                                    </div>
                                @endif
                                @if ($plan->id !== 4)
                                    <p class="text-muted mb-0 line" style="text-decoration: line-through">
                                        &nbsp;
                                    </p>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <span class="fw-bold monthlyPrices" style="font-size: 25px;">
                                            ₹{{ $plan->price }}
                                        </span>
                                        <span class="text-muted org" style="font-size:15px">/user/month</span>


                                        {{-- <span class="text-muted org" style="font-size:15px"></span> --}}

                                    </div>
                                @endif
                                <small>(+ GST)</small>


                                {{-- <p class="text-muted mb-0 org"> --}}
                                {{-- <br><br>
                                <b>

                                    (0-10 users)
                                </b> --}}
                                {{-- </p> --}}
                                {{-- &nbsp; --}}
                                <p class="text-muted annual">Billed Anually</p>
                                <button onclick="checkIfAuth()" class="btn btn-primary mt-1">Start
                                    {{ $plan->days }}-days free
                                    trial</button>
                            </div>
                            <div class="bg-white pt-2">
                                @if ($plan->id === 4)
                                    <i class="bi bi-people-fill" style="font-size: 30px"></i>
                                    <i class="bi bi-people-fill reverse" style="font-size: 30px;"></i>
                                @else
                                    <i class="fa-solid fa-users" style="font-size: 30px;margin-bottom:.5rem;"></i>
                                @endif
                                <p class="mb-0">{{ $plan->id === 4 ? 'Unlimited' : $plan->users }} Users</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="plan_contents">
            <h2 class="text-center mb-3">Simple, Straightforward Pricing!</h2>
            <table class="w-100 mt-2 bg-white" style="position: sticky; top: 0;z-index:2;">
                <tbody>
                    <tr>
                        <td colspan="5" class="d-table-cell d-md-none text-center">
                            <h3 class="fw-bold d-md-block d-none">All Plans</h3>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-start"
                                style="gap: 0.5rem">
                                <span>Monthly</span>
                                <label class="switch">
                                    <input type="checkbox" id="tablePriceSwitchmobile" />
                                    <span class="slider"></span>
                                </label>
                                <span>Yearly</span>
                                {{-- <span style="color: #f75949" class="font-italic">(Save up to 25%)</span> --}}
                            </div>
                            {{-- <p class="text-muted mb-0 orgTablemobile">/Organization/user </p> --}}
                            <p class="text-muted mb-0 annualTablemobile">Billed Annually</p>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="d-none d-md-table-cell">
                            <h3 class="fw-bold">All Plans</h3>
                            <div class="d-flex align-items-center" style="gap: 0.5rem">
                                <span>Monthly</span>
                                <label class="switch">
                                    <input type="checkbox" id="tablePriceSwitch" />
                                    <span class="slider"></span>
                                </label>
                                <span>Yearly</span>
                            </div>
                            {{-- <p class="text-muted mb-0 orgTable">/Organization/user </p> --}}
                            <p class="text-muted mb-0 annualTable">Billed Annually</p>
                        </td>
                        <td>
                            <div class="text-center plans">
                                <p>Standard</p>
                                <button onclick="checkIfAuth()"
                                    class="d-none d-md-inline-block btn btn-outline-dark">Sign-up now</button>
                                <a href="" class="text-dark d-block d-md-none"><u>Sign-up now</u></a>
                            </div>
                        </td>
                        <td>
                            <div class="text-center plans">
                                <p> Professional </p>
                                <button onclick="checkIfAuth()"
                                    class="d-none d-md-inline-block btn btn-primary">Sign-up now</button>
                                <a href="" class="text-primary d-block d-md-none"><u>Sign-up now</u></a>
                            </div>
                        </td>
                        <td>
                            <div class="text-center plans">
                                <p>Premium</p>
                                <button onclick="checkIfAuth()"
                                    class="d-none d-md-inline-block btn btn-outline-dark">Sign-up now</button>
                                <a href="" class="text-dark d-block d-md-none"><u>Sign-up now</u></a>
                            </div>
                        </td>
                        <td>
                            <div class="text-center plans">
                                <p> Custom </p>
                                <button onclick="checkIfAuth()"
                                    class="d-none d-md-inline-block btn btn-outline-dark">Sign-up now</button>
                                <a href="" class="text-dark d-block d-md-none"><u>Sign-up now</u></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        @foreach ($plans as $plan)
                            <td class="text-center fw-bold pt-1">
                                <span
                                    class="plans_price monthlyTablePrices">{{ $plan->id !== 4 ? '₹' . $plan->price : 'as per client Requirements' }}</span>
                                {{-- <span class="text-muted orgTable"
                                    style="font-weight: normal">{{ $plan->id !== 4 ? '/user/month' : '' }}</span><br>
                                <small>(+ GST)</small> --}}

                                @if ($plan->id !== 4)
                                    <span class="text-muted orgTable"
                                        style="font-weight: normal">{{ $plan->id !== 4 ? '/user/month' : '' }}</span><br>
                                    <small>(+ GST)</small>
                                @elseif ($plan->id === 4)
                                    <span class="text-muted" style="font-weight: normal"></span><br>
                                    <small>(+ GST)</small>
                                @endif
                            </td>
                        @endforeach

                        {{-- <td class="text-center fw-bold pt-1">
                            <span class="plans_price monthlyTablePrices">₹899</span><span class="text-muted orgTable"
                                style="font-weight: normal">/user/month</span><br>
                            <small>(+ GST)</small>

                        </td>
                        <td class="text-center fw-bold pt-1">
                            <span class="plans_price monthlyTablePrices">₹799</span><span class="text-muted orgTable"
                                style="font-weight: normal">/user/month</span><br>
                            <small>(+ GST)</small>

                        </td>
                        <td class="text-center fw-bold pt-1">
                            <span class="plans_price monthlyTablePrices">as per client Requirements</span><span
                                class="text-muted" style="font-weight: normal"></span><br>
                            <small>(+ GST)</small>

                        </td> --}}
                    </tr>
                    <tr>
                        <td colspan="5">
                            <input class="form-check-input" type="checkbox" id="expandall" />
                            <label for="expandall"> Expand All </label>
                        </td>
                    </tr>
                </tbody>
            </table>

            <div class="accordion-main">
                {{-- dashboard --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Dashboard</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Lead Details
                                        <br />(Pie Chart)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Opti Task Details
                                        <br />(Pie Charts) on 2
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Calendar
                                        <br />(Task, Todo, Followup Details)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Total Receivables
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Progress bar hours logged detail
                                        <br />(Progress Bar)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Sales & Expenses Details
                                        <br />(Bar Graph)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                            <tr>
                                <td>Sales, Receipt and Dues
                                    <br />(Tabular Form)
                                </td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                            </tr>
                            <tr>
                                <td>Total Sales
                                </td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                            </tr>
                            <tr>
                                <td>Receipt & Expenses
                                </td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                                <td><i class="bi bi-check2-circle"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- leads --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Leads</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>All Leads
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Important
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Overdue
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due Today
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due Tomorrow
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due This Week
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- emails --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Emails</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>All features of gmail with details of integrated
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Task Email Template
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Inbox for notifications
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- tasks --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Tasks</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>All tasks
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Important
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Overdue
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due Today
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due Tomorrow
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due This Week
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Team Chats
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Workload Capacity <br />(But some limitations)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Task Cost Sheet
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- clients --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Clients</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Client Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Invoice Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Payment Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Due Amount
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Open Lead/Task
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Completed Task
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Closed Task
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Filtering<br />(All active & inactive clients and contact person details)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Client Company Management
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- calendar --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Calendar</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Leads/Tasks
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Followup Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Filtering<br />(All upcoming, pending, completed, email, phone, visit)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- accounts --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Accounts</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>All Account Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Filtering<br />(Proposals, invoices, payments & expenses details)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Inbox for notifications
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- employee --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Employee</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>All employee details<br />(Proposals, invoices, payments & expenses details)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Lead/Task, Cost Sheet & Activity Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- settings --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Settings</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Organization Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Features
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Designation
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Bank Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Templates<br />(Subtask Templates, Proposal Templates & Email Templates)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Categories<br />(Category name, Default employees, Default checklist)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Template & Default Due Date Integrations
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Mail Settings, Inbound/Outbound Email Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Assigned Users
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- timesheet --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Timesheet</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Timesheet<br />(With work details)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Time Tracking
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>User Activity
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- reports --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Reports</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Reports<br />(View & download all task and employee reports as an excel sheet)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- blogs --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Blogs</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Custom Domain<br />(Create your own blogs for your website)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                                <tr>
                                    <td>Lead/Task, Cost Sheet & Activity Details
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- todo --}}
                <div class="accordion-item">
                    <div class="accordion-header">
                        <i class="bi bi-plus-circle"></i>
                        <span class="ms-1">Todo</span>
                    </div>
                    <div class="accordion-content">
                        <table class="w-100 acc_table">
                            <tbody>
                                <tr>
                                    <td>Todo<br />(Create your personal todo and mention someone)
                                    </td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                    <td><i class="bi bi-check2-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script>
        function handleCardClick(cardId) {
            // Remove "active-card" class from all cards
            const cards = document.querySelectorAll('.card');
            cards.forEach(card => card.classList.remove('active-card'));

            // Add "active-card" class to the clicked card
            const clickedCard = document.querySelector(`.${cardId}`);
            clickedCard.classList.add('active-card');
        }
    </script> --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const accordionItems = document.querySelectorAll(".accordion-item");
            const expandAllCheckbox = document.getElementById("expandall");


            function toggleIndividualAccordion(item) {
                const content = item.querySelector(".accordion-content");
                const icon = item.querySelector(".accordion-header i");
                item.classList.toggle("active");
                if (item.classList.contains("active")) {
                    content.style.maxHeight = content.scrollHeight + 1 + "px";
                    icon.classList.replace("bi-plus-circle", "bi-dash-circle");
                } else {
                    content.style.maxHeight = "0";
                    icon.classList.replace("bi-dash-circle", "bi-plus-circle");
                }
            }


            function toggleAllAccordionContent() {
                accordionItems.forEach((item) => {
                    const content = item.querySelector(".accordion-content");
                    const icon = item.querySelector(".accordion-header i");
                    if (expandAllCheckbox.checked) {
                        item.classList.add("active");
                        content.style.maxHeight = content.scrollHeight + 1 + "px";
                        icon.classList.replace("bi-plus-circle", "bi-dash-circle");
                    } else {
                        item.classList.remove("active");
                        content.style.maxHeight = "0";
                        icon.classList.replace("bi-dash-circle", "bi-plus-circle");
                    }
                });
            }


            accordionItems.forEach((item) => {
                const header = item.querySelector(".accordion-header");
                header.addEventListener("click", () => {
                    toggleIndividualAccordion(item);
                });
            });


            expandAllCheckbox.addEventListener("change", toggleAllAccordionContent);
        });
    </script>
    <script>
        const priceSwitch = document.getElementById("priceSwitch");
        const prices = document.querySelectorAll(".monthlyPrices");
        const line = document.querySelectorAll(".line");
        const org = document.querySelectorAll(".org");
        const annual = document.querySelectorAll(".annual");

        let monthlyPrices = []
        prices.forEach(priceElement => {
            const priceValue = parseFloat(priceElement.innerText.replace(/[^\d.]/g, '')); // Extract numeric value
            monthlyPrices.push(priceValue);
        });

        const yearlyPrices = monthlyPrices.map(price => {
            return isNaN(price) ? "as per client Requirements" : price * 12;
        });

        priceSwitch.addEventListener("change", () => {
            prices.forEach((price, index) => {
                if (priceSwitch.checked) {
                    price.innerText = isNaN(yearlyPrices[index]) ? "as per client Requirements" :
                        `₹${yearlyPrices[index]}`;
                } else {
                    price.innerText = isNaN(monthlyPrices[index]) ? "as per client Requirements" :
                        `₹${monthlyPrices[index]}`;
                }


                if (line[index]) {
                    line[index].innerText = `₹${monthlyPrices[index]}`;
                    line[index].style.opacity = priceSwitch.checked ? 1 : 0;
                }

                annual[index].style.opacity = priceSwitch.checked ? 1 : 0;

                // if (index !== 0 && org[index]) {
                //     org[index].innerText = priceSwitch.checked ? '/user/year' : '/user/month';
                // } 
                // else {
                //     org[index].innerText = null;
                // }
                if (org[index]) {
                    org[index].innerText = priceSwitch.checked ? '/user/year' : '/user/month';
                }
            });
        });
    </script>

    <script>
        function checkIfAuth() {
            fetch('https://api-office36ty.protracked.in/v1/user-check-auth')
                .then(response => response.json()) // Assuming the response is in JSON format
                .then(data => {
                    // Do something with the retrieved data
                    // console.log('Data from URL:', data);
                    if (data.message) {
                        window.location = 'https://app.oas36ty.com/dashboard'
                    } else {
                        window.location = `${window.location.origin}/register-new`

                    }

                    // Store the data in localStorage if needed
                    // localStorage.setItem('urlData', JSON.stringify(data));
                })
                .catch(error => console.error('Error fetching data:', error));
        }
        const tablepriceSwitch = document.getElementById("tablePriceSwitch");
        const tablepriceSwitchmobile = document.getElementById("tablePriceSwitchmobile");
        const tableprices = document.querySelectorAll(".monthlyTablePrices");
        const orgTable = document.querySelectorAll(".orgTable");
        // const orgTablemobile = document.querySelector(".orgTablemobile");
        const annualTable = document.querySelector(".annualTable");
        const annualTablemobile = document.querySelector(".annualTablemobile");

        let monthlyTablePrices = []
        tableprices.forEach(priceElement => {
            const priceValue = parseFloat(priceElement.innerText.replace(/[^\d.]/g, '')); // Extract numeric value
            monthlyTablePrices.push(priceValue);
        });

        const yearlyTablePrices = monthlyTablePrices.map(price => {
            return isNaN(price) ? "as per client Requirements" : price * 12;
        });

        tablepriceSwitch.addEventListener("change", () => {
            tableprices.forEach((price, index) => {
                if (tablepriceSwitch.checked) {
                    price.innerText = isNaN(yearlyTablePrices[index]) ? "as per client Requirements" :
                        `₹${yearlyTablePrices[index]}`;
                } else {
                    price.innerText = isNaN(monthlyTablePrices[index]) ? "as per client Requirements" :
                        `₹${monthlyTablePrices[index]}`;
                }

                if (orgTable[index]) {
                    orgTable[index].innerText = tablepriceSwitch.checked ? '/user/year' : '/user/month';
                }
            });
        });

        tablepriceSwitchmobile.addEventListener("change", () => {
            tableprices.forEach((price, index) => {
                if (tablepriceSwitchmobile.checked) {
                    price.innerText = isNaN(yearlyTablePrices[index]) ? "as per client Requirements" :
                        `₹${yearlyTablePrices[index]}`;
                } else {
                    price.innerText = isNaN(monthlyTablePrices[index]) ? "as per client Requirements" :
                        `₹${monthlyTablePrices[index]}`;
                }

                if (orgTable[index]) {
                    orgTable[index].innerText = tablepriceSwitchmobile.checked ? '/user/year' :
                        '/user/month';
                }
            });
        });
    </script>
    @include('footer')
</body>

</html>
