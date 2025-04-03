<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <style>
        :root {
            --primary-color: #3498db;
            --secondary-color: #2980b9;
            --accent-color: #e74c3c;
            --light-color: #ecf0f1;
            --dark-color: #2c3e50;
            --sidebar-width: 250px;
            --rightbar-width: 200px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: grid;
            grid-template-columns: var(--sidebar-width) 1fr var(--rightbar-width);
            grid-template-rows: 80px 1fr;
            height: 100vh;
            background-color: #f5f7fa;
        }

        /* Header Styles */
        header {
            grid-column: 1 / 4;
            background-color: var(--dark-color);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 10;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .profile-pic {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--light-color);
        }

        /* Left Sidebar Styles */
        .sidebar {
            background-color: var(--dark-color);
            color: white;
            padding: 20px 0;
            overflow-y: auto;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            padding: 12px 25px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .sidebar-menu li:hover {
            background-color: rgba(255,255,255,0.1);
        }

        .sidebar-menu li.active {
            background-color: var(--primary-color);
            border-left: 4px solid var(--accent-color);
        }

        .sidebar-menu li i {
            width: 20px;
            text-align: center;
        }

        /* Main Content Styles */
        .main-content {
            padding: 30px;
            overflow-y: auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }

        .section {
            margin-bottom: 40px;
            display: none;
        }

        .section.active {
            display: block;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .section-title {
            color: var(--dark-color);
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--light-color);
        }

        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: var(--light-color);
            color: var(--dark-color);
        }

        table tr:hover {
            background-color: #f9f9f9;
        }

        /* Right Sidebar Styles */
        .right-sidebar {
            background-color: var(--light-color);
            padding: 20px;
            overflow-y: auto;
            border-left: 1px solid #ddd;
        }

        .right-menu {
            list-style: none;
        }

        .right-menu li {
            padding: 12px 15px;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 5px;
            margin-bottom: 5px;
        }

        .right-menu li:hover {
            background-color: rgba(0,0,0,0.05);
        }

        .right-menu li.active {
            background-color: var(--primary-color);
            color: white;
        }

        .calendar {
            margin-top: 30px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .calendar-days {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .calendar-dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .calendar-date {
            padding: 8px;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
        }

        .calendar-date:hover {
            background-color: rgba(0,0,0,0.1);
        }

        .calendar-date.today {
            background-color: var(--primary-color);
            color: white;
        }

        .calendar-date.event {
            background-color: var(--accent-color);
            color: white;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            body {
                grid-template-columns: var(--sidebar-width) 1fr;
            }
            .right-sidebar {
                display: none;
            }
            header {
                grid-column: 1 / 3;
            }
        }

        @media (max-width: 768px) {
            body {
                grid-template-columns: 1fr;
                grid-template-rows: 80px auto auto;
            }
            header {
                grid-column: 1 / 2;
            }
            .sidebar {
                grid-row: 2;
                grid-column: 1;
            }
            .main-content {
                grid-row: 3;
            }
        }
    </style>
    <style>
        /* Add these styles to your existing CSS */
        .student-profile-section {
            margin-bottom: 30px;
        }
    
        .profile-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
    
        .profile-header {
            display: flex;
            padding: 25px;
            background: linear-gradient(135deg, #3498db, #2c3e50);
            color: white;
            align-items: center;
        }
    
        .profile-image-container {
            position: relative;
            margin-right: 25px;
        }
    
        .profile-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    
        .edit-profile-btn {
            position: absolute;
            bottom: 5px;
            right: 5px;
            background: var(--accent-color);
            color: white;
            border: none;
            border-radius: 20px;
            padding: 5px 10px;
            font-size: 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s;
        }
    
        .edit-profile-btn:hover {
            background: #c0392b;
        }
    
        .profile-info h2 {
            margin: 0 0 5px 0;
            font-size: 24px;
        }
    
        .student-id {
            margin: 0 0 15px 0;
            opacity: 0.9;
            font-size: 14px;
        }
    
        .badges {
            display: flex;
            gap: 10px;
        }
    
        .badge {
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
    
        .badge.honor-roll {
            background: rgba(241, 196, 15, 0.2);
            color: #f1c40f;
            border: 1px solid #f1c40f;
        }
    
        .badge.perfect-attendance {
            background: rgba(46, 204, 113, 0.2);
            color: #2ecc71;
            border: 1px solid #2ecc71;
        }
    
        .class-details {
            padding: 20px;
        }
    
        .class-details h3 {
            color: var(--dark-color);
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
    
        .details-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
    
        .detail-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }
    
        .detail-label {
            font-weight: 600;
            color: var(--dark-color);
        }
    
        .detail-value {
            color: #555;
        }
    
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
    
            .profile-image-container {
                margin-right: 0;
                margin-bottom: 15px;
            }
    
            .badges {
                justify-content: center;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <div class="logo">Student Portal</div>
        <div class="profile">
            <span>John Doe</span>
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="profile-pic">
        </div>
    </header>

    <aside class="sidebar">
        <ul class="sidebar-menu">
            <li class="active" data-section="dashboard">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </li>
            <li data-section="study">
                <i class="fas fa-book"></i>
                <span>Study Materials</span>
            </li>
            <li data-section="schedule">
                <i class="fas fa-calendar-alt"></i>
                <span>Class Schedule</span>
            </li>
            <li data-section="tests">
                <i class="fas fa-clipboard-list"></i>
                <span>Tests & Exams</span>
            </li>
            <li data-section="homework">
                <i class="fas fa-tasks"></i>
                <span>Homework</span>
            </li>
            <li data-section="grades">
                <i class="fas fa-chart-line"></i>
                <span>Grades</span>
            </li>
            <li data-section="messages">
                <i class="fas fa-envelope"></i>
                <span>Messages</span>
            </li>
            <li data-section="settings">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
            </li>
        </ul>
    </aside>

    <main class="main-content">
        <!-- Dashboard Section -->
        <section id="study" class="section">
            <h2 class="section-title">Study Materials</h2>
            <div class="card">
                <h3>Available Materials</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Material</th>
                            <th>Type</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>Algebra Basics</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>Biology Chapter 5</td>
                            <td>Video</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Grammar Rules</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section id="dashboard" class="section active">
            <h2 class="section-title">Dashboard</h2>

            
            <div class="student-profile-section">
                <div class="profile-card">
                    <div class="profile-header">
                        <div class="profile-image-container">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Student Profile" class="profile-image">
                            <button class="edit-profile-btn"><i class="fas fa-camera"></i> Update</button>
                        </div>
                        <div class="profile-info">
                            <h2>John Doe</h2>
                            <p class="student-id">ID: STU20230032</p>
                            <div class="badges">
                                <span class="badge honor-roll"><i class="fas fa-award"></i> Honor Roll</span>
                                <span class="badge perfect-attendance"><i class="fas fa-calendar-check"></i> Perfect Attendance</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="class-details">
                        <h3><i class="fas fa-graduation-cap"></i> Class Information</h3>
                        <div class="details-grid">
                            <div class="detail-item">
                                <span class="detail-label">Grade Level:</span>
                                <span class="detail-value">10th Grade</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Class Teacher:</span>
                                <span class="detail-value">Ms. Sarah Johnson</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Class Room:</span>
                                <span class="detail-value">Room 205</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Academic Year:</span>
                                <span class="detail-value">2023-2024</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">House:</span>
                                <span class="detail-value">Blue House</span>
                            </div>
                            <div class="detail-item">
                                <span class="detail-label">Advisor:</span>
                                <span class="detail-value">Mr. Robert Chen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <h3>Welcome Back, John!</h3>
                <p>Here's what's happening today:</p>
                
                <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px;">
                    <div class="card">
                        <h4><i class="fas fa-book" style="color: var(--primary-color);"></i> Today's Classes</h4>
                        <ul style="margin-top: 10px; list-style: none;">
                            <li style="padding: 8px 0; border-bottom: 1px solid #eee;">Mathematics (9:00 AM)</li>
                            <li style="padding: 8px 0; border-bottom: 1px solid #eee;">Science (10:30 AM)</li>
                            <li style="padding: 8px 0;">English (1:00 PM)</li>
                        </ul>
                    </div>
                    
                    <div class="card">
                        <h4><i class="fas fa-tasks" style="color: var(--primary-color);"></i> Pending Homework</h4>
                        <ul style="margin-top: 10px; list-style: none;">
                            <li style="padding: 8px 0; border-bottom: 1px solid #eee;">Math Assignment (Due Tomorrow)</li>
                            <li style="padding: 8px 0;">Science Project (Due Friday)</li>
                        </ul>
                    </div>
                    
                    <div class="card">
                        <h4><i class="fas fa-bell" style="color: var(--primary-color);"></i> Upcoming Tests</h4>
                        <ul style="margin-top: 10px; list-style: none;">
                            <li style="padding: 8px 0; border-bottom: 1px solid #eee;">History Quiz (Tomorrow)</li>
                            <li style="padding: 8px 0;">Math Test (Next Monday)</li>
                        </ul>
                    </div>
                </div>
            </div>

            
            
            <section id="study" class="section">
            <h2 class="section-title">Study Materials</h2>
            <div class="card">
                <h3>Available Materials</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Material</th>
                            <th>Type</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>Algebra Basics</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>Biology Chapter 5</td>
                            <td>Video</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Grammar Rules</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>



            <div class="card" style="margin-top: 20px;">
                <h3>Recent Activities</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Activity</th>
                            <th>Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Today</td>
                            <td>Submitted Math homework</td>
                            <td>Mathematics</td>
                        </tr>
                        <tr>
                            <td>Yesterday</td>
                            <td>Completed Science quiz</td>
                            <td>Science</td>
                        </tr>
                        <tr>
                            <td>2 days ago</td>
                            <td>Received English assignment</td>
                            <td>English</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Study Materials Section -->
        <section id="study" class="section">
            <h2 class="section-title">Study Materials</h2>
            <div class="card">
                <h3>Available Materials</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Material</th>
                            <th>Type</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>Algebra Basics</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>Biology Chapter 5</td>
                            <td>Video</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Grammar Rules</td>
                            <td>PDF</td>
                            <td><a href="#"><i class="fas fa-download"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Class Schedule Section -->
        <section id="schedule" class="section">
            <h2 class="section-title">Class Schedule</h2>
            <div class="card">
                <h3>Weekly Schedule</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Time</th>
                            <th>Monday</th>
                            <th>Tuesday</th>
                            <th>Wednesday</th>
                            <th>Thursday</th>
                            <th>Friday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9:00 - 10:00</td>
                            <td>Mathematics</td>
                            <td>English</td>
                            <td>Science</td>
                            <td>Mathematics</td>
                            <td>History</td>
                        </tr>
                        <tr>
                            <td>10:30 - 11:30</td>
                            <td>Science</td>
                            <td>Mathematics</td>
                            <td>English</td>
                            <td>Science</td>
                            <td>Physical Education</td>
                        </tr>
                        <tr>
                            <td>1:00 - 2:00</td>
                            <td>English</td>
                            <td>Science</td>
                            <td>Mathematics</td>
                            <td>English</td>
                            <td>Art</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Tests Section -->
        <section id="tests" class="section">
            <h2 class="section-title">Tests & Exams</h2>
            <div class="card">
                <h3>Upcoming Tests</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Subject</th>
                            <th>Type</th>
                            <th>Syllabus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>May 15, 2023</td>
                            <td>Mathematics</td>
                            <td>Unit Test</td>
                            <td>Chapters 1-5</td>
                        </tr>
                        <tr>
                            <td>May 20, 2023</td>
                            <td>Science</td>
                            <td>Quiz</td>
                            <td>Biology Section</td>
                        </tr>
                        <tr>
                            <td>May 25, 2023</td>
                            <td>English</td>
                            <td>Midterm</td>
                            <td>Grammar & Literature</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Homework Section -->
        <section id="homework" class="section">
            <h2 class="section-title">Homework</h2>
            <div class="card">
                <h3>Current Assignments</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Assignment</th>
                            <th>Due Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Mathematics</td>
                            <td>Algebra Problems</td>
                            <td>May 12, 2023</td>
                            <td><span style="color: green;">Completed</span></td>
                        </tr>
                        <tr>
                            <td>Science</td>
                            <td>Lab Report</td>
                            <td>May 15, 2023</td>
                            <td><span style="color: orange;">In Progress</span></td>
                        </tr>
                        <tr>
                            <td>English</td>
                            <td>Essay Writing</td>
                            <td>May 18, 2023</td>
                            <td><span style="color: red;">Not Started</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <aside class="right-sidebar">
        <h3>Quick Links</h3>
        <ul class="right-menu">
            <li class="active">Today's Classes</li>
            <li>Upcoming Tests</li>
            <li>Pending Homework</li>
            <li>Study Resources</li>
            <li>School Events</li>
        </ul>

        <div class="calendar">
            <div class="calendar-header">
                <h3>May 2023</h3>
                <div>
                    <button style="background: none; border: none; cursor: pointer;"><i class="fas fa-chevron-left"></i></button>
                    <button style="background: none; border: none; cursor: pointer;"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>
            
            <div class="calendar-days">
                <div>Sun</div>
                <div>Mon</div>
                <div>Tue</div>
                <div>Wed</div>
                <div>Thu</div>
                <div>Fri</div>
                <div>Sat</div>
            </div>
            
            <div class="calendar-dates">
                <!-- This would be dynamically generated in a real app -->
                <div class="calendar-date">30</div>
                <div class="calendar-date">1</div>
                <div class="calendar-date">2</div>
                <div class="calendar-date">3</div>
                <div class="calendar-date">4</div>
                <div class="calendar-date">5</div>
                <div class="calendar-date">6</div>
                <div class="calendar-date">7</div>
                <div class="calendar-date">8</div>
                <div class="calendar-date">9</div>
                <div class="calendar-date today">10</div>
                <div class="calendar-date">11</div>
                <div class="calendar-date">12</div>
                <div class="calendar-date">13</div>
                <div class="calendar-date">14</div>
                <div class="calendar-date event">15</div>
                <div class="calendar-date">16</div>
                <div class="calendar-date">17</div>
                <div class="calendar-date event">18</div>
                <div class="calendar-date">19</div>
                <div class="calendar-date event">20</div>
                <div class="calendar-date">21</div>
                <div class="calendar-date">22</div>
                <div class="calendar-date">23</div>
                <div class="calendar-date">24</div>
                <div class="calendar-date event">25</div>
                <div class="calendar-date">26</div>
                <div class="calendar-date">27</div>
                <div class="calendar-date">28</div>
                <div class="calendar-date">29</div>
                <div class="calendar-date">30</div>
                <div class="calendar-date">31</div>
            </div>
        </div>
    </aside>

    <script>
        // Handle sidebar menu clicks
        document.querySelectorAll('.sidebar-menu li').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all items
                document.querySelectorAll('.sidebar-menu li').forEach(li => {
                    li.classList.remove('active');
                });
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Hide all sections
                document.querySelectorAll('.section').forEach(section => {
                    section.classList.remove('active');
                });
                
                // Show the selected section
                const sectionId = this.getAttribute('data-section');
                document.getElementById(sectionId).classList.add('active');
            });
        });

        // Handle right menu clicks
        document.querySelectorAll('.right-menu li').forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all items
                document.querySelectorAll('.right-menu li').forEach(li => {
                    li.classList.remove('active');
                });
                
                // Add active class to clicked item
                this.classList.add('active');
                
                // Here you would typically load different content based on selection
                // For this demo, we'll just show an alert
                alert(`Loading ${this.textContent}...`);
            });
        });

        // Calendar date click handler
        document.querySelectorAll('.calendar-date').forEach(date => {
            date.addEventListener('click', function() {
                if (this.classList.contains('event')) {
                    alert('You have an event on this date!');
                } else if (this.classList.contains('today')) {
                    alert("Today's date selected");
                } else {
                    alert(`Date ${this.textContent} selected`);
                }
            });
        });
    </script>
    
    
    <script>
        // Add this to your existing JavaScript
        document.querySelector('.edit-profile-btn').addEventListener('click', function() {
            // In a real app, this would open a profile edit modal
            alert('Profile edit functionality would open here');
        });
    </script>
</body>
</html>