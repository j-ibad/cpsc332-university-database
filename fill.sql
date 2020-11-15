/**================= Minimum 3 Professors =================*/
INSERT INTO Professor(SSN, Pname, Ptitle, Psex, Degree, Salary, Area_code, Tel7Digit, Street, City, State, ZIP)
VALUES (111111111, "Fred Johnson", "Mr.", "M", "BS CS", 93830, 239, 2000529, "62 Lyme Street", "Loxahatchee", "FL", 33470);

INSERT INTO Professor(SSN, Pname, Ptitle, Psex, Degree, Salary, Area_code, Tel7Digit, Street, City, State, ZIP)
VALUES (222222222, "Frank Jackson", "Dr.", "M",  "PhD CS", 181219, 219, 2090829, "9270 Inverness Ave", "Jeffersonville", "IN", 47130);

INSERT INTO Professor(SSN, Pname, Ptitle, Psex, Degree, Salary, Area_code, Tel7Digit, Street, City, State, ZIP)
VALUES (333333333, "Kayla Warren", "Mrs.", "F",  "MS Math", 120977, 240, 4381325, "59 Snake Hill St", "Elkton", "MD" 21921);

/**================= Minimum 2 Departments =================*/
INSERT INTO Department(Dep_ID, Dep_Name, Dep_TelNum, Office_location, ChairSSN)
VALUES (100, "Computer Science", 7147417267, "CS-501", 222222222);

INSERT INTO Department(Dep_ID, Dep_Name, Dep_TelNum, Office_location, ChairSSN)
VALUES (101, "Mathematics", 7147437373, "MH-601", 333333333);

/*================= Minimum 4 Courses =================*/
INSERT INTO Course(Course_ID, Ctitle, Units, TextbookISBN13, Dep_ID)
VALUES ("CPSC-131", "Data Structures", 3, "978-1438253275", 100);

INSERT INTO Course(Course_ID, Ctitle, Units, TextbookISBN13, Dep_ID)
VALUES ("CPSC-240", "Computer Organization", 3, "978-0133769401", 100);

INSERT INTO Course(Course_ID, Ctitle, Units, TextbookISBN13, Dep_ID)
VALUES ("CPSC-362", "Intro to Software Engineering", 3, "978-0133943030", 100);

INSERT INTO Course(Course_ID, Ctitle, Units, TextbookISBN13, Dep_ID)
VALUES ("MATH-250A", "Multivariable Calculus", 4, "978-1305266643", 101);

/*================= Minimum 6 Sections =================*/
INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (13377, "CPSC-131", "CS-105", 40, '10:00', '11:50', 111111111);

INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (19281, "CPSC-240", "CS-207", 30, '11:30', '13:00', 111111111);

INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (19282, "CPSC-240", "CS-203", 30, '14:00', '15:30', 222222222);

INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (19620, "CPSC-362", "CS-309", 45, '09:00', '10:50', 222222222);

INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (13071, "MATH-250A". "MH-401", 35, '08:00', '09:50', 333333333);

INSERT INTO Section(Section_number, Course_ID, Classroom, No_seats, Begin_time, End_time, P_SSN)
VALUES (13072, "MATH-250A", "MH-401", 35, '10:00', '11:50', 333333333);

/*================= Minimum 8 Students =================*/
INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800001111, "Alice", "Smith", 7147551636, "7494 Dogwood Street, Canyon Country, CA 91351", 100);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800002222, "Alex", "White", 7147538071, "12 Henry Smith Street, San Jose, CA 95122", 100);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800003333, "Bob", "Hill", 7147511848, "81 Brook Drive, Sunnyvale, CA 94087", 100);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800004444, "Bill", "Brown", 7147495500, "988 Lawrence St, Montebello, CA 90640", 100);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800005555, "John", "Doe", 7144959439, "856 Creekside Drive, Los Angeles, CA 90019", 100);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800006666, "Jane", "Doe", 7146703863, "9440 Circle Dr, Porterville, CA 93257", 101);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800007777, "Joe", "Koci", 7144210820, "8264 Windsor St, Ontario, CA 91762", 101);

INSERT INTO Student(CWID, Fname,  Lname, S_TelNum, S_Address, Major_DepID)
VALUES (800008888, "Eva", "Roger", 7146440514, "8074 E. Rockland Rd, National City, CA 91950", 100);

/*================= No min =================*/
INSERT INTO Minor(CWID, Dep_ID)
VALUES (800003333, 101);

INSERT INTO Minor(CWID, Dep_ID)
VALUES (800006666, 100);

/*================= Minimum 20 Enrollment Records =================*/
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800001111, 13377, "B");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800001111, 13071, "A");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800002222, 13377, "A-");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800002222, 13071, "B");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800002222, 19620, "A+");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800003333, 19282, "A");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800003333, 13071, "B");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800004444, 19281, "B");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800004444, 13071, "C");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800004444, 19620, "B");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800005555, 19281, "A");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800005555, 13072, "A+");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800006666, 19281, "B");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800006666, 13072, "A+");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800006666, 19620, "A");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800007777, 13377, "D+");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800007777, 13072, "A");

INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800008888, 19282, "A");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800008888, 13072, "C");
INSERT INTO Enrollment(CWID, Section_number, Grade)
VALUES (800008888, 19620, "B");

/*================= No min =================*/
INSERT INTO Prerequisite(Course_ID, Prerequisite_ID)
VALUES ("CPSC-240", "CPSC-131");

/*================= No min =================*/
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-131", 13377, 1);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-131", 13377, 3);

INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-240", 19281, 2);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-240", 19281, 4);

INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-240", 19282, 1);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-240", 19282, 3);

INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-362", 19620, 2);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("CPSC-362", 19620, 4);

INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("MATH-250A". 13071, 1);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("MATH-250A". 13071, 3);

INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("MATH-250A". 13072, 2);
INSERT INTO Meeting(Course_ID, Section_number, Day_no)
VALUES ("MATH-250A". 13072, 4);
