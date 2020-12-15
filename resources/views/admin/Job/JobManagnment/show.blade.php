@extends('layouts.admin')
@section('content')
@foreach($jobapps as $jobapp)
<style>
    th{
        width: 150px;
    }
</style>
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} Job Detail
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.Job.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Job Name
                        </th>
                        <td>
                            {{ $jobapp->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Job Location
                        </th>
                        <td>
                            {{ $jobapp->loName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Job Department
                        </th>
                        <td>
                            {{ $jobapp->deName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Job Types
                        </th>
                        <td>
                            {{ $jobapp->tyName }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Job Description
                        </th>
                        <td>
                            @if($jobapp->name == 'Customer Engineer (Data Management)')
                            <p>The abc Cloud Platform team helps customers transform and evolve their business through the use of abc’s global network, web-scale data centers and software infrastructure. As part of an entrepreneurial team in this rapidly growing business, you
                                will help shape the future of businesses of all sizes use technology to connect with customers, employees and partners.</p>
                            <h2>Minimum qualifications:</h2>
                            <ul>
                                <li>Bachelor's degree in Computer Science or equivalent practical experience.</li>
                                <li>SQL experience with query troubleshooting experience. Experience with database technologies.</li>
                                <li>Experience with database performance tuning including network performance, storage performance, and database tuning techniques.</li>
                                <li>Experience as a technical sales engineer in a cloud computing environment or equivalent experience in a customer-facing role.</li>
                            </ul>
                            <h2>Preferred qualifications:</h2>
                            <ul>
                                <li>Master’s or PhD degree in Engineering, Computer Science or other technical related field, or equivalent practical experience.</li>
                                <li>4 years of technical sales experience or professional consulting experience in the fields of systems integration, large scale data transfer/management, and enterprise database performance.</li>
                                <li>Strong experience with optimizing database performance with respect to transactional and/or analytic workloads</li>
                                <li>Deep expertise in disaster recovery (DR) and data backup strategies</li>
                                <li>Ability to learn quickly learn, understand, and work with new emerging technologies, methodologies, and solutions in the Cloud/IT Technology space.</li>
                                <li>Ability to effectively present to both technical and non-technical audiences.</li>
                            </ul>
                            @elseif($jobapp->name == 'Global Business Brand Team - Campaign Activations')
                            <h2>Team</h2>
                            <p>Codedott’s Global Business Brand Team is responsible for driving awareness and consideration of Codedott for advertisers through a variety of bold, provocative marketing initiatives including global advertising campaigns, thought leadership
                                and insights marketing, global B2B event positioning and content, and sales training and presentations. Our team drives strategy, storytelling and execution of innovative programs that break through to our target audience, set the bar
                                for creative excellence in the industry and achieve results in support of our revenue team’s goals.</p>
                            <h2>Role</h2>
                            <p>The Brand Campaign Activations Lead will be responsible for driving our global brand campaign, related content programs and experiential activations with a focus on the periods pre-during-post Cannes and CES. They will lead the strategic planning
                                that sets a foundation for creative excellence and act as a consultant on brand campaign executions across regions. They will have strong experience developing global creative strategies, managing campaigns, and working with creative and
                                media agencies.</p>
                            <h2>Responsibilities</h2>
                            <ul>
                                <li>Lead global campaign strategy, communicating our core business value proposition and key benefits for advertisers around the world</li>
                                <li>Partner with our internal creative team as well as external creative and media agencies to develop bold, provocative work and elevate ideas that drive outsized visibility and impact</li>
                                <li>Foster innovation in how our business brand breaks through to a highly discerning audience of the world’s top media planners, creatives and buyers. Work with thought leaders to explore new platforms for storytelling</li>
                                <li>Drive consistency in strategy and message and act as a partner to cross functional partners and regional marketing teams</li>
                                <li>Serve as a trusted leader for the team and within the broader marketing org</li>
                            </ul>
                            <h2>Requirements</h2>
                            <p>Bachelor’s Degree.</p>
                            <ul>
                                <li>7-8+ years experience working on high functioning marketing and / or agency teams</li>
                                <li>A big thinker who can take multiple, evolving inputs, and condense to simple, powerful positioning and messaging</li>
                                <li>Strong analytical capabilities, with an ability to unearth insights, and tell stories through data.</li>
                                <li>Ability to write very clear, focused briefs</li>
                                <li>Proven experience leading strategy for large / influential brands, and helping these brands grow</li>
                                <li>Experience in leading integrated global brand campaigns</li>
                                <li>Experience working with and managing creative and media agencies</li>
                                <li>Comfort with public speaking and pitching ideas to senior leadership</li>
                                <li>Outstanding communication, teamwork and interpersonal skills; #OneTeam mentality</li>
                                <li>Growth mindset; always looking to learn, improve and understand</li>
                                <li>Strong organizational and time management skills; proficient at balancing multiple workstreams and projects</li>
                                <li>Excels in fast-paced and dynamic environment; track record of working successfully across complex cross-functional teams</li>
                            </ul>
                            @elseif($jobapp->name == 'Finance Project Manager (PMO)')
                            <p><strong>The Finance Project Management Office (PMO)</strong> team is looking for an energetic, pro-active Project Manager to join the Finance Operations team. The candidate will work with Finance business users and IT Team members to design, build,
                                and support various applications across multiple projects in areas of Order to Cash, Credit &amp; Collections, FP&amp;A and integrations with Product and Sales. The ideal candidate should establish positive, professional relationships with
                                both business and IT teams, is a trusted partner and a respectful challenger, and acts as the primary liaison between the business and the IT teams for the project. The individual must be a strategic thinker while having the proven ability
                                to work well with the entire organization to ensure consistency of process across all departments and countries.</p>
                            <h2>Who We Are:</h2>
                            <ul>
                                <li>Work with cross functional teams such as OTC, Credit &amp; Collections, FP&amp;A, Revenue product and Sales Operations for various enhancements and project asks.</li>
                                <li>Manage day-to-day operational aspects of projects to ensure project documents are complete, current, and signed-off by all stakeholders.</li>
                                <li>Manage the entire project lifecycle from project definition through implementation, partnering with Finance , Oracle ERP IT and IT Product Managers. Develop project plan and drive project milestones.</li>
                                <li>Engage with Global business process owners to define business requirements with IT, drafting use cases/user stories, conditions of satisfaction, KPIs and cut-over activities.</li>
                                <li>Drive operational excellence into process and procedures, with a focus on documentation, cross-training, testing, monitoring, and measurement.</li>
                                <li>Establish proper communication channels with various business functions and respond appropriately to all business concerns.</li>
                                <li>Provides day-to-day direction to project resources. Responsible for preparation of project documentation, and status reports.</li>
                                <li>Accountable for meeting agreed upon scope, schedule and quality measures.</li>
                                <li>Recognize possible solutions to business problems and help select the most appropriate solution. Challenges current business practices and proposed solutions to ensure the best alternative is being selected.</li>
                                <li>Keep abreast of changes in the company and proactively engages in identifying solutions for future changes.</li>
                                <li>Comply with corporate policies and procedures, and other compliance areas.</li>
                            </ul>
                            <h2>Who You Are:</h2>
                            <ul>
                                <li>7+ years of experience working in the capacity of a Project Manager</li>
                                <li>Experience working on major ERP and CRM systems</li>
                                <li>Experience with global end-to-end O2C, Collections and Financial Planning and reporting good to have.</li>
                                <li>Experience with all aspects of IT system implementation including, but not limited to as-is and to-be business process mapping, requirements gathering, design, development, testing, cut-over and go-live activities.</li>
                                <li>Experience developing and executing complex project plans.</li>
                                <li>Experience in building and leading a high performance from both internal and external teams.</li>
                                <li>Excellent written, interpersonal and communication skills</li>
                                <li>Expert knowledge of MS Project, Excel, MS Word and Visio.</li>
                                <li>BS in business, finance, systems, engineering or project management</li>
                                <li>PMP Certification desirable</li>
                                <li>You exhibit an enthusiastic, can-do spirit and approach your work with curiosity, resilience, and a growth mindset in a fast-paced, dynamic, and often ambiguous work environment.</li>
                                <li>You have a demonstrated commitment to ongoing personal growth and development.</li>
                                <li>You are passionate about technology and relish the opportunity to learn and apply new technical concepts to your work.</li>
                            </ul>
                            @elseif($jobapp->name == 'Senior Software Engineer - Data Management')
                            <h2>Who we are</h2>
                            <p>The Data Management Organization is tasked with ownership and management of the</p>
                            <p>shared services data environments. This function oversees the shared data services</p>
                            <p>environment and ensures company-wide adherence to the data lifecycle, privacy,</p>
                            <p>security, and ultimately the data strategy.</p>
                            <h2>What You'll Do</h2>
                            <p>Build internal systems driving the effectiveness of Twitter’s shared data environment,</p>
                            <p>work closely with team members and stakeholders to build new and extend existing</p>
                            <p>systems. Your focus will be on building scalable backend systems for our applications,</p>
                            <p>but with the opportunity to work on other parts of the stack as well. This role reports to the</p>
                            <p>Director of Data Management.</p>
                            <h2>JOB DESCRIPTION</h2>
                            <ul>
                                <li>5+ years of experience as Back-end Engineer</li>
                                <li>Ability to take on complex problems, learn quickly, and persist towards a good solution</li>
                                <li>Strong technical background with experience with</li>
                                <li>Scripting languages: Bash, Python, Java</li>
                                <li>Build Tools: Git, Gradle, Selenium Tests, Chef</li>
                                <li>Monitoring Tools: Sumo, Prometheus, Graphana, OpsGenie, etc</li>
                                <li>Multi-threaded performance testing with Java and Python</li>
                                <li>Backend server technologies like Scala, TLS, Finagle, Finatra, and Flask</li>
                                <li>A detailed approach to prototyping, writing tests and quality assurance</li>
                            </ul>
                            @else
                            {{ $jobapp->description }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Number of Worker
                        </th>
                        <td>
                            {{ $jobapp->CPeople }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endforeach
@endsection