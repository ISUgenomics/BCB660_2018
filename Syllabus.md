# BCB660 Introduction to Next-Gen Sequencing Spring 2018

Overview of next-generation sequencing data analysis including hands-on practice using computational tools to solve a variety of biological problems. Topics include: Quality Control, contamination analysis, Genome assembly, alignments, genome annotation, RNASeq and SNP analysis. Students will also learn UNIX commands, shell scripts and regular expressions need to run the tools. No prior knowledge of UNIX is required. Students will be provided access to high performance computing clusters to work on the data analysis.

#### Course Goals:
Provide a hands-on experience in analyzing next-gen sequencing data.
Students will understand various sequencing technologies and how to apply appropriate tools to analyze big data.

#### Intended audience:
Graduate students interested in gaining experience in high-throughput sequencing data analyses.

| | |  
|---|---|  
|Instructor:|	[Andrew Severin](severin@iastate.edu)|  
|Email|severin@iastate.edu|  
|Office Hours:| Tue 10-11 in 206 Science I|
|Class Meetings:| TR 8:00 – 9:20 AM in MBB 1340|


**Textbook:**	No required textbook. Course materials and research articles will be provided and taken mainly from the [Bioinformatics Workbook](https://github.com/ISUgenomics/bioinformatics-workbook/blob/master/index.md) at [https://github.com/ISUgenomics/bioinformatics-workbook/blob/master/index.md](https://github.com/ISUgenomics/bioinformatics-workbook/blob/master/index.md)

#### Grading
|Points | Description|
|-|-|
|20| Slack, XSEDE, Github Assignment|
|20| Regular expressions Assignment|
|10| Project plan |
|20|Alignment project|   
|100|RNA-Seq project|  
|400|Projects 1-4 (100 points each)|  
|570 |Total|   

Projects 1, 2, 3 and 4 are determined by the student and can be chosen based on their interests.  The following topics are currently available to choose from:

|Project Type | Description| | |
|-|-|
|Genome assembly|Illumina| Pacbio| hybrid|
|Genome annotation| Gene models| functional prediction|
|SNP Calling | 90 fish exp |
|RNA-Seq | with a genome | without a genome|
|Metagenomics| Qiime|
|Dex-Seq|
|Atac-Seq|
|ChIP-Seq|

|Example 1| Potential extra point assignments|
|-|-|
|Genome assembly Pacbio| (hybrid, illumina, comparison)|
|Genome annotation (gene models)| (functional annotation)|
|RNA-Seq without a Genome | (comparison to with a genome)|
|Dex-Seq an extension to the RNA-Seq analysis| |



#### Intended Learning Outcomes:
Students are expected to gain an understanding of the importance of bioinformatic approaches in modern biological research. For each topic covered, they will understand the fundamental biological questions and be able to apply appropriate computational tools. Students will understand basic principles underlying computational approaches, realize the limitations of available tools, and be able to critically interpret results.


#### Late assignments  
Assignments turned in late will receive a 10% reduction off of the total possible points for every day it is turned in late until 10 days after the assignment is due at which time no points will be given even if the assignment is turned in late.

#### Class projects

Students are required to complete projects and assignments independently but can work together to help each other by asking questions as they need while going through the provided tutorials.  Projects will be recorded using markdown in a GitHub private repositories provided by the instructor to each student.  Projects are expected to include an **Introduction** summarizing the project goals and species, **Methods** that include each command used to generate output used in the results, **Results** describing the major findings, a **Discussion** section that describes the meaning behind several results discovered and a **Future Directions** section that describes where the student would take the project from here.
Figures and tables should be included in the approprate sections.  The report should reflect the students understanding beyond just getting an answer.

#### Students with Disabilities:
If you have a disability and require accommodations, please contact one of the instructors early in the semester so that your learning needs may be appropriately met. You will need to provide documentation of your disability to the Disability Resources (DR) office, located on the main floor of the Student Services Building, Room 1076, 515-294-6624.

#### Harassment and Discrimination
Iowa State University strives to maintain our campus as a place of work and study for faculty, staff, and students that is free of all forms of prohibited discrimination and harassment based upon race, ethnicity, sex (including sexual assault), pregnancy, color, religion, national origin, physical or mental disability, age, marital status, sexual orientation, gender identity, genetic information, or status as a U.S. veteran. Any student who has concerns about such behavior should contact his/her instructor, Student Assistance at 515-294-1020 or email dso-sas@iastate.edu, or the Office of Equal Opportunity and Compliance at 515-294-7612.

#### Religious Accommodation
If an academic or work requirement conflicts with your religious practices and/or observances, you may request reasonable accommodations. Your request must be in writing, and your instructor or supervisor will review the request. You or your instructor may also seek assistance from the Dean of Students Office or the Office of Equal Opportunity and Compliance.



BCB 660: Introduction to NextGen Sequencing Tentative class schedule
Spring 2018

|#	|Date	 |	Day| Topic |	Homework|
|-|-|-|
|1	|9-Jan|	T	|Introduction and Github/XSEDE/Slack setup/markdown| |
|2	|11-Jan	|R	|Unix review|  |
|3	|16-Jan	|T	|No Class	| |
|4	|18-Jan	|R	| File formats |  	|
|5	|23-Jan	|T	|Regular expressions | |	 
|6	|25-Jan	|R	|Introduction & Sequencing technologies	  |  	 |
|7	|30-Jan	|T	|QC and contamination|Regular Expressions Assignment due |
|8	|1-Feb	|R	| Alignment |  	|
|9	|6-Feb	|T	| Alignment work day|   QC and contamination Assignment due|
|10	|8-Feb	|R	| RNA-Seq |Individual project plans due|
|11	|13-Feb	|T	| RNA-Seq | Alignment Assignment due 	|
|12	|15-Feb	|R	| RNA-Seq |	 |
|13	|20-Feb	|T	| RNA-Seq | 	 |
|14	|22-Feb	|R	| Project time| RNA-Seq Assignment Due	 |
|15	|27-Feb	|T	| Project time|  |
|16	|1-Mar	|R  | Project time| |
|17	|6-Mar	|T	| Project Deadline 1 | 1 Project Report due for Interval 1 |
|18	|8-Mar	|R	| Project time|  |
|19	|13-Mar	|T	| |Spring Break	 |
|20	|15-Mar	|R	| |Spring Break	 |
|21	|20-Mar	|T  | Project time||
|22	|22-Mar	|R  | Project time| 	 |
|23	|27-Mar	|T	| Project Deadline 2| 1 Project due for Interval 2|
|24	|29-Mar	|R	| Project time|	|
|25	|3-Apr	|T  | Project time|	 |
|26	|5-Apr	|R	| Project time|	|
|27	|10-Apr	|T	| Project Deadline 3| 1 Projects due for Interval 3 |
|28	|12-Apr	|R	| Project time||
|29	|17-Apr	|T	| Project time | |
|30	|19-Apr	|R	| Project time| 	 |
|31	|24-Apr	|T	| Project Deadline 4  | 1 Projects due for Interval 4|
|32	|26-Apr	|R	| Project time  |Final Project reports Due	Finals Week|
|33	|1-May	|T	| |Finals Week|
|34	|3-May	|R	| ||
