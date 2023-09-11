@extends('layouts.app')

@section('content')

<script>
    function goBack() {
        window.history.back();
    }
</script>
<button class="btn btn-default" onclick="goBack()">Go Back</button>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color:#33F3FF; font-size:25px;">Function</div>
                <div class="card-body" style="font-family:Arial">
                    <b style="font-size:25px;">1.0 LEADERSHIP</b>
                        <br><br>
                    <b style="font-size:21px;">1.1 LEADERSHIP AND MANAGEMENT COMMITMENT</b>
                        <br>
                    <p style="font-size:16px;">The Top Management of BGHMC is committed to the development, implementation and improvement of the Quality Management System through
                    <br>1.1.1 Communicating the QMS to all Hospital personnel (through regular and special internal meetings, displays/ notices on boards, internal circulars, memoranda, notices, internal audit, announcements during flag ceremony, etc.), the importance of meeting customer as well as regulatory and legal requirements of the service provided.
                    <br>1.1.2 Establishing the Quality Policy.
                    <br>1.1.3 Establishing the Quality Objectives.
                    <br>1.1.4 Ensuring the integration of the quality management system requirements into the organization’s health provision and training of healthcare professional staff;
                    <br>1.1.5 Promoting the use of the process approach and risk-based thinking;
                    <br>1.1.6 Ensuring that the quality management system achieves its intended results;
                    <br>1.1.7 Engaging, directing and supporting persons to contribute to the effectiveness of the quality management system;
                    <br>1.1.8 promoting improvement;
                    <br>1.1.9 supporting other relevant management roles to demonstrate their leadership as it applies to their areas of responsibility.
                    <br>1.1.10 Conducting management review meetings (at least once in six months)
                    <br>1.1.11 Ensuring the availability of necessary resources, physical and human, for all activities.</p>

                    <p style="font-size:16px;">Reference: ISO 9001:2015 Clause 5.1 Leadership and Commitment</p>
                        <br>
                    <b style="font-size:21px;">1.2 ESTABLISHING THE QUALITY POLICY</b>
                        <br>
                    <p style="font-size:16px;">Top management has established, implemented and maintained a quality policy that is appropriate to the purpose and context of BGHMC and supports its strategic directions; it has provided a framework for setting its quality objectives, and included a commitment to satisfy applicable requirements and continual improvement of the quality management system.</p>
                    <p style="font-size:16px;">The quality policy shall be available and is maintained as documented information; it shall be communicated, understood and applied within BGHMC; it shall be available to relevant interested parties, as appropriate.</p>
                    <p style="font-size:16px;">Reference: ISO 9001:2015 Clause 5.2 Policy</p>
                        <br>
                    <b style="font-size:21px;">1.3 ORGANIZATIONAL ROLES, RESPONSIBILITY AND AUTHORITIES</b>
                        <br>
                    <p style="font-size:16px;">Responsibility and authority are defined and communicated to all division and unit heads for effective quality management. The responsibility and authority of key persons in the organizational chart are given, understood and contained in their job descriptions.</p>
                        <br>
                    <b style="font-size:21px;">1.3.1 MEDICAL CENTER CHIEF</b>
                        <br>
                    <p style="font-size:16px;">Shall be responsible for the following:
                    <br>a. Overall management and administration of the hospital;
                    <br>b. Planning, organizing, operation and formulation of policies of the hospital;
                    <br>c. Decides on controversial cases;
                    <br>d. Formulates strategies for implementation of health programs and plans of DOH in the hospital
                    <br>e. Supervises the formulation of budget proposal;
                    <br>f. Provides final disposition of appointments, promotions and dismissal of personnel;
                    <br>g. Enforces discipline and evaluates administrative performances of a subordinates;
                    <br>h. Supervise training of medical, nursing, other para-medical and non-medical personnel as requirements for their learning and development.</p>
                        <br>
                    <b style="font-size:21px;">1.3.2 QUALITY ASSURANCE OFFICER (QUAO):</b>
                        <br>
                    <p style="font-size:16px;">Top management has assigned the responsibility and authority to the QuAO:
                    <br>a. Ensuring that the quality management system conforms to the requirements of ISO 9001:2015.
                    <br>b. ensuring that the processes are delivering their intended outputs;
                    <br>c. Reporting on the performance of the quality management system and on opportunities for improvement, in particular to top management;
                    <br>d. ensuring the promotion of customer focus throughout BGHMC;
                    <br>e. ensuring that the integrity of the quality management system is maintained when changes to the quality management system are planned and implemented.</p>
                        <br>
                    <b style="font-size:21px;">1.3.3 CHIEF, MEDICAL PROFESSIONAL STAFF</b>
                    <p style="font-size:16px;">a. Exercise general supervision over the clinical cluster, ancillary cluster and the allied cluster in providing quality inpatient and outpatient care
                    <br>b. Supervises the implementation of clinical resource management system and advising and assisting the Medical Center Chief in the formulation and implementation of policies, plans and programs of the hospital.
                    <br>c. Supervises clinical conferences with medical staff on difficult or perplexing cases for discussion and decision;
                    <br>d. Coordinates with the MCC and other division heads in the planning, organizing, operation and formulation of policies in the hospital
                    <br>e. Heads the medical credentials committee in the applications, promotions, or dismissal of the medical services.
                    <br>f. Takes over as Officer-in-charge in the absence of the Medical Center Chief
                    <br>g. Coordinates with the Medical Training Officer on conduct of training of Medical residents and the other para-medical healthcare staff to meet high standards of clinical training and in promotion of research activities.</p>
                        <br>
                    <b style="font-size:21px;">1.3.4 CHIEF, HOSPITAL AND PATIENT SUPPORT SERVICE</b>
                    <p style="font-size:16px;">a. Administrative Officer shall assist the Medical Center Chief in coordinating hospital functions and recommends needed changes in administrative policies,
                    <br>b. assists in the operation of the institution in the implementation of hospital rules and regulations,
                    <br>c. shall be responsible for administrative services relating to personnel management, administrative record management, property and supply management, general services, engineering and security
                    <br>d. coordinates with the Medical Center Chief and other division heads in the planning, organizing, operation and formulation of policies of the hospital;</p>
                        <br>
                    <b style="font-size:21px;">1.3.5 CHIEF, FINANCE SERVICE</b>
                    <p style="font-size:16px;">a. Shall be responsible for the provision of financial services relating to budgeting, accounting, cash operations, billing and claims.
                    <br>b. coordinates with the Medical Center Chief and other division heads in the planning, organizing, operation and formulation of policies of the hospital;</p>
                        <br>
                    <b style="font-size:21px;">1.3.6 CHIEF, NURSING DIVISION</b>
                    <p style="font-size:16px;">a. Shall be responsible for implementing nursing programs for total quality healthcare; providing nursing care to medical cases, and developing, coordinating and implementing relevant training programs for nursing personnel.
                    <br>b. coordinates with the Medical Center Chief and other division heads in the planning, organizing, operation and formulation of policies of the hospital;</p>
                        <br>
                    <b style="font-size:21px;">1.3.7 HEAD, OUT PATIENT DEPARTMENT</b>
                    <p style="font-size:16px;">a. The Out Patient Department head shall coordinate with all Clinical Department Chairpersons with regards to provision of Medical personnel that conduct consultation at the OPD.
                    <br>b. HE/ She shall coordinate with nursing, HIMS services to oversee the smooth service provision at the Out Patient clinic and ensures quality service provision in this area.</p>
                        <br>
                    <b style="font-size:21px;">1.3.8 INTENSIVE CARE UNITS</b>
                    <p style="font-size:16px;">a. Each Chairperson of each Clinical department with Intensive Care units (MICU, PICU, SICU, PNCU, IMU) shall be responsible in addressing concerns of critically ill patients admitted at the ICU.
                    <br>b. They shall closely coordinate with heads of nursing services assigned to these areas.</p>
                        <br>
                    <b style="font-size:21px;">1.3.9 MEDICAL STAFF</b>
                    <p style="font-size:16px;">Medical Doctors (Specialists, Consultants, Residents) shall be responsible to provide quality health care services needed by clients in accordance to recent Clinical Practice Guidelines, textbooks and recommendations by their respective Specialty Societies</p>
                        <br>
                    <b style="font-size:21px;">1.3.10 BILLING AND COLLECTION</b>
                    <p style="font-size:16px;">Billing and Collection shall be responsible for receiving collections from patient’s fees and other hospital revenues and remit the same to the Department of Health.</p>
                        <br>
                    <b style="font-size:21px;">1.3.11 MATERIALS MANAGEMENT OFFICER</b>
                    <p style="font-size:16px;">a. The MMO shall be responsible for planning, organizing and supervising the work of technical and clerical personnel engaged in the receipt, control and issuance of supplies;
                    <br>b. makes decisions involving supply problems and confers with proper authorities on personnel and other administrative matters relative thereto;
                    <br>c. interprets objectives and reviews, approves and submits monthly reports, on supplies issued; prepares and submits annual reports; does other related duties as may be assigned from time to time.
                    <br>d. In general, shall be responsible for the standard system of warehousing of inventories, property and equipment, and shall ensure accurate and complete documentation and reporting of acceptance, inspection, storage and issuance, transfer or disposal inventories of all property and equipment.</p>
                        <br>
                    <b style="font-size:21px;">1.3.12 HEAD, RADIOLOGY</b>
                    <p style="font-size:16px;">a. The Radiology head shall be responsible for ensuring quality diagnostic x-ray, ultrasound, mammography and CT scan services are rendered to all availing clients.
                    <br>b. He/ She shall supervise personnel on safety measures at the area of work, as well as the maintenance of all equipment under his care.</p>
                        <br>
                    <b style="font-size:21px;">1.3.13 HEALTH INFORMATION MANAGEMENT OFFICER</b>
                    <p style="font-size:16px;">The HIMO head shall supervise processes of receiving, qualitatitve and quantitative analysis of records, ICD-10 coding, encoding, indexing and filing of health records. He shall supervise processes of releasing requested documents, transcription and submission for registration of certificates of live birth, collection and filing of certificates of death, submission of health reports and ensuring that Medical Records plans, set up, organization and management are efficient, economical and are of good quality.</p>
                        <br>
                    <b style="font-size:21px;">1.3.14 HEAD, DEPARTMENT OF PATHOLOGY</b>
                    <p style="font-size:16px;">a. The head of the Laboratory Section shall supervise processes on performing various chemical, microscopic, bacteriologic, hematological, serologic examination and shall be responsible for accuracy and timely release of results
                    <br>b. He/ She shall supervise the actions and responsibilities of other pathology staff in the control of specimen submission, receipt, processing and release for IN, Out, and ER patients in the Clinical and Anatomic sections of the Department of Pathology.</p>
                        <br>
                    <b style="font-size:21px;">1.3.15 HEAD, PHARMACY</b>
                    <p style="font-size:16px;">He/ She shall be responsible in the supervision of ensuring the availability, accessibility, proper handling and storage of medicines and medical supplies to fill prescriptions of medical supplies and PNDF medicines in accordance with the 4 Rs; right medicine, right patient, right preparation and the the right time.</p>
                        <br>
                    <b style="font-size:21px;">1.3.16 HEAD, DENTAL DEPARTMENT</b>
                    <p style="font-size:16px;">He/ She shall ensure supervision and provision of thorough oral examination for proper diagnosis and management of clients. It includes the extraction, cleaning and repair of the teeth, making and fitting of dentures and teaching dental medicine and surgery.</p>
                        <br>
                    <b style="font-size:21px;">1.3.17 HEAD, NUTRITION AND DIETARY DEPARTMENT</b>
                    <p style="font-size:16px;">He/ She shall supervise the provision of quality nutrition and dietetic services to achieve optimal nutrition and other related services to patients, personnel and guests utilizing nutritious and quality foods through careful planning, wise procurement, and proper preparation of balanced and satisfying meals within budget allocation.</p>
                        <br>
                    <b style="font-size:21px;">1.3.18 HEAD, MEDICAL SOCIAL SERVICES</b>
                    <p style="font-size:16px;">He/ She shall supervise processes of interviewing, gathering data and relevant information about clients in his/her environment to determine hospital classification and assist in problem solution that give impact on medical treatment and care.
                    <br>He/ She shall supervise the extended assistance extended to patients like medicines, medical supplies, medical kits or assistive devices, transportation and referrals.</p>
                        <br>
                    <b style="font-size:21px;">1.3.19 BUDGET OFFICER</b>
                    <p style="font-size:16px;">Budget Officer shall take charge of the preparation of the operation plan, budget proposal, work and financial plan, budget and financial accountability reports, monitoring of budget, processing of claims for the availability of hospital fund and recording of disbursements and adjustments of obligations/ utilizations for the hospital.</p>
                        <br>
                    <b style="font-size:21px;">1.3.20 HEAD, HUMAN RESOURCE MANAGEMENT</b>
                    <p style="font-size:16px;">He/ She shall be responsible to supervise the efficient management of human resources in coordination with the management through effective planning in human resource development and implementation of policies and procedures.</p>
                        <br>
                    <p style="font-size:16px;">He/ She shall supervise the recruitment, selection and placement of personnel, learning and development in coordination with the Professional Education and Training Office, performance management, preparation of employees’ salaries and benefits and rewards and recognition.</p>
                        <br>
                    <p style="font-size:16px;">Reference:
                    <br>ISO 9001:2015 Clause 5.3 Organizational Roles, Responsibilities and Authorities
                    <br>Human Resources Management Procedure (BGH-QP-HS-HRM-001)
                    <br>Learning and Development Planning Procedure (BGH-QP-MCC-PETO-LD-002)</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
