@extends('web.app')

@section('content')
    <div class="container col-xxl-10 px-4 py-5 section_1">
        <div class="overlay_div_gradient"></div>
        <div class="row flex-lg-row align-items-center g-5 pt-4">
            <div class="col-lg-8 mb-4">
                <h1 class="display-5 fw-bold lh-2 mb-3 text-white">Transform Workflows with <span><br>AI-Powered
                        Precision!</span></h1>
                <p class="lead text-white about_text_gray">Automate. Innovate. Accelerate. Harness the power of AI
                    to streamline<br> operations, enhance efficiency, and drive business growth.</p>
                <p class="lead text-white about_text_gray">"Start Your Automation Journey Today!"</p>
            </div>
            <div class="col-lg-4 text-center mb-4">
                <img src="{{asset('web/images/ai_automation.png')}}" width="350" />
            </div>
        </div>
    </div>

    <div class="container section_2 mt-0 ai_automation_section_2">
        <h2>Tackle Real-World Business Challenges with Decisions <span>AI Process Automation</span></h2>
        <p>Empower your operations with Decisions to solve everyday business obstacles effectively:</p>
        <p><strong>Automated Document Processing:</strong> Effortlessly extract and organize critical data from
            invoices, contracts, and purchase/work orders. Streamline routine tasks and allow your team to focus on
            strategic priorities.</p>
        <p><strong>Intelligent Semantic Search:</strong> Simplify tasks like completing security questionnaires,
            drafting RFPs, and summarizing meeting transcripts. Save time, minimize errors, and boost productivity.
        </p>
        <p><strong>Custom AI Chatbots:</strong> Transform your manuals and SOPs into intelligent chatbots. Integrate
            them into customer service, sales, or internal support for fast, accurate responses and enhanced user
            experiences.</p>
        <p>Step into the next era of business efficiency with Decisions AI process automation.</p>
    </div>

    <div class="container overflow-hidden ai_automation_section_3">
        <h2>Boost Productivity with AI Automation</h2>
        <p>AI-powered automation is the game-changer your business needs to achieve unparalleled efficiency. Routine
            tasks that drain your team's energy are seamlessly replaced with intelligent workflows designed to
            maximize productivity.
            <br><br>
            By harnessing the power of smart algorithms, repetitive processes are transformed into streamlined,
            automated operations. This shift not only saves time but also allows your team to dedicate their efforts
            to high-impact, strategic projects that drive growth and innovation.
        </p>

        <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center">
            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/enhanced-efficiency.webp')}}" />
                <h4 class="mb-3">Streamlined Efficiency</h4>
                <p class="mb-3 text-secondary">Saves valuable time and minimizes errors by automating workflows,
                    enabling teams to focus on high-impact tasks and consistently enhance productivity.</p>
            </div>

            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/cost-saving.webp')}}" />
                <h4 class="mb-3">Cost Optimization</h4>
                <p class="mb-3 text-secondary">Automates repetitive processes, reducing operational expenses while
                    significantly improving productivity and driving profitability across the board.</p>
            </div>

            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/improved-accuracy.webp')}}" />
                <h4 class="mb-3">Precision and Accuracy</h4>
                <p class="mb-3 text-secondary">Ensures error-free and consistent results, strengthening the
                    integrity of data and delivering reliable outcomes for every operation.</p>
            </div>

            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/adaptable-scalability.webp')}}" />
                <h4 class="mb-3">Scalable Flexibility</h4>
                <p class="mb-3 text-secondary">Seamlessly adapts to evolving demands, allowing businesses to scale
                    their operations without disruption or added complexities.</p>
            </div>

            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/rapid-decision-making.webp')}}" />
                <h4 class="mb-3">Data-Driven Decisions</h4>
                <p class="mb-3 text-secondary">Provides actionable real-time insights that empower leaders to make
                    informed decisions quickly and with greater confidence.</p>
            </div>

            <div class="col-11 col-sm-6 col-lg-4">
                <img src="{{asset('web/images/customer-experience.webp')}}" />
                <h4 class="mb-3">Enhanced Customer Satisfaction</h4>
                <p class="mb-3 text-secondary">Delivers exceptional customer service through faster response times,
                    24/7 availability, and more personalized support experiences.</p>
            </div>

        </div>

    </div>

    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container ai_automation_section_4">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5">
                    <img class="img-fluid rounded" loading="lazy" src="{{asset('web/images/ai_automation01.jpg')}}"
                        alt="About 1">
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">Empower Your Business with AI Automation</h2>
                            <p class="lead fs-4 text-secondary mb-3">Experience how AI transforms industries
                                through real-world webinars and demos. Simplify operations, solve challenges, and
                                drive efficiency effortlessly.</p>
                            <p class="mb-5">Join our webinars to explore how AI-driven automation can streamline
                                processes and enhance efficiency. Book a demo to see how we can simplify your
                                business operations for optimal results.</p>
                            <div class="row gy-4 gy-md-0 gx-xxl-5X">
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Discover AI Automation Webinars</h2>
                                                <p class="text-secondary mb-0">Join us to see how AI-driven
                                                    automation transforms industries, enhancing efficiency and
                                                    delivering exceptional outcomes.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="d-flex">
                                        <div class="me-4 text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                                                <path
                                                    d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="mb-3">Revolutionize Your Operations</h2>
                                                <p class="text-secondary mb-0">Explore how Decisions simplifies
                                                    complex problems and standardizes workflows. Book a demo today!
                                                </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection