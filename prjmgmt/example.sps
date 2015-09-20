variable labels
  a01 'How much did your child weigh when he/she was born?'
  a02 'How many months pregnant when you first received prenatal care?'
  a03 'During pregnancy how many times see doctor for prenatal care?'
  a04 'Was your child born more than two weeks before heshe was due?'
  a05a 'How many days or weeks early was heshe value?'
  a05b 'How many days or weeks early was heshe metric?'
  a06 'How old were you when your child was born?'
  a07 'Did you breastfeed your child?'
  a08 'How old was your child when breastfeeding ended?'
  a09 'Did you smoke at any time while you were pregnant with him/her?'
  a10 'Does your child have any kind of health insurance now?'
  a11 'What primary health insurance is child currently covered by?'
  a12 'Is there place non ER where your child usually goes when sick?'
  a13 'Is there health provider usually take child for well-child care?'
  a14 'How many times in year did child receive a well-child checkup?'
  a15 'In past year any time child need health care but didnt get it?'
  a16a 'If Yes because: Childs doctor did not consider it a problem'
  a16b 'If Yes because: Could not afford it'
  a16c 'If Yes because: Doctor Schedule was fullno free appointment'
  a16d 'If Yes because: Dont knowDeclined'
  a16e 'If Yes because: Had no health insurance'
  a16f 'If Yes because: Insurance did not cover the visit'
  a16g 'If Yes because: Other'
  a16h 'If Yes because: You had childcare problems'
  a16i 'If Yes because: You had transportation problems'
  a17 'From our org referrals to other agencies?'
  a17a 'From our org referrals to: Child CareCC DevPreschool Services'
  a17b 'From our org referrals to: Health Careother health services'
  a17c 'From our org referrals to: Service for children w/ special needs'
  a17d 'From our org referrals to: Other Services'
  a18 'Professional ever tell you they were doing devel screening?'
  a19 'If Yes, who did developmental screening?'
  a20 'Doctor told you that child was developmentally delayed?'
  a21 'Doctor told you that child has following disabilitiess/pc needs?'
  a21a 'Mental Retardation'
  a21b 'At Risk'
  a21d 'Hearing impairment'
  a21e 'Deafness'
  a21f 'Visual impairment including blindness'
  a21h 'Speech or language impairment'
  a21i 'Emotional disturbance'
  a21j 'Autism'
  a21k 'Specific learning disability'
  a21l 'Orthopedic impairment'
  a21m 'Other health impairment'
  a22 'How old child when told was dev delayed/had disabilityspc need?'
  a23 'Plan developed to identify services needed for your child IEP?'
  a24 'Child ever receive sp services/program for children w/ sp needs?'
  a25 'Any concerns how child developing/growing not being addressed?'
  a26 'Does your child have dental insurance?'
  a27 'When child last saw dentist/dental hygienist for dental care?'
  a28 'In typ wk how often sing songs with your child?'
  a29 'In typ wk how often read to or show picture books to child?'
  a30 'In typ wk how often tell stories to your child?'
  a31 'Does anyone in your household smoke?'
  a32 'How many times you and your family moved in the last 12 months?'
  a33_alt 'How many family members in household incl you?'
  a33a 'How many family members in household incl you over 18 years old?'
  a33b 'How many family members in household incl you 6-18 years old?'
  a33c 'How many family members in household incl you under age 6?'
  a34 'What is highest level of education completed by childs mother?'
  a34_alt 'Does the childs mother have a high school diploma or a GED?'
  a35 'What is highest level of education completed by childs father?'
  a36 'Currently have any regular child care/preschool for your child?'
  a37 'If Yes, what type of childcare or preschool arrangement?'
  a38 'If care in home, is provider relative?'
  a39 'If care in home, is provider licensed family/home day care?'
  a40 'Which category best describes total family income in last year?'
  a41 'Who is the child currently living with?'
  b01 'Has your child received all of the recommended vaccines for age?'
  b02 'Since child 3yrs regular gone presch/pre-K/Hd Start/CC center?'
  b03 'Was this a Head Start program?'.

value labels
  a02 99 'didnt receive prenatal care' /
  a08 99 'still breastfeeding'.


missing values language (99).
if (Language eq 10) language = 99.

if (birth_country eq 14) birth_country = 15.

recode a01 (2=1) (1=2) (3=3) (4=4).
value labels a01 1 'Under 3 lbs 5oz' 2 '3 lbs 5 oz-5 lbs 7 oz'
  3 '5 lbs 8 oz-7 lbs 15 oz' 4 '8 lbs and above'.

if (a02 eq 22) a02 = 5.

compute a05 = a05a.
formats a05 (f2.0).
if (a05a eq 30) a05 = 4.
variable labels a05 'How many weeks early was he/she?'.

recode a11 (2,5,8,9=1)(1,3,4,6,7=2)(10=3)into a11r.
variable labels a11r 'Health Insurance (collapsed)'.
value labels a11r 1 'Private' 2 'Public' 3 'Uninsured'.

recode a27 (4=1) (2=2) (1=3) (3=4).
value labels a27 1 'Never' 2 '2 years ago or more' 3 '1 to 2 years ago'
  4 'Less than 1 year ago'.

recode a28 a29 a30 (3=1)(4=2)(1=3)(2=4).
value labels a28 a29 a30 1 'Not at all' 2 'Once or twice a week'
  3 '3-6 times a week' 4 'Everyday'.

compute a33 = 99.
formats a33 (f2.0).
if (nmissing(a33a,a33b,a33c)>0) a33 = sum(a33a,a33b,a33c).
if (not(missing(a33_alt))) a33 = a33_alt.
missing values a33 (99).
variable labels a33 'How many family members in household incl you?'.

recode a34 a35 (2=1)(4=2)(5=3)(8=4)(3=5)(7=6)(1=7)(6=8).
value labels a34 a35 1 '8th grade or less' 2 'Grades 9-11'
  3 'High School grad/equivalent' 4 'Trade/Vocational School'
  5 'Associate Degree (AA)' 6 'Some college but no degree'
  7 '4 years graduate' 8 'Post graduate degree'.

if (missing(a34_alt) and a34 lt 3) a34_alt = 1.
if (missing(a34_alt) and a34 ge 3) a34_alt = 2.

recode a40 (6=1)(1=2)(2=3)(3=4)(4=5)(5=6)(7=7).
value labels a40 1 'Less than $10K' 2 '$10K - less than $20K'
  3 '$20K - less than $30K' 4 '$30K - less than $40K'
  5 '$40K - less than $50K' 6 '$50K - less than $75K'
  7 'More than $75K'.