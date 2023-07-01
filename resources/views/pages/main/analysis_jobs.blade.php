<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="background-color: rgb(186, 195, 195);">

<head>

    @include('layouts.head')

    <!-- CSS only -->
    <link href="{{ asset('css/fl.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <title>Freelancers</title>

</head>

<body>

    @include('layouts.nav-bar')


    <!-- card is here -->
    <section class="py-5 section-style mggg">
        <div class="container">
            <div>
                <div class="lh-base font-ar-para col-bg-color h6 mb-0 p-3 text-break text-center fw-bold rounded-top">بعد
                    اجراء
                    دراسة على
                    الخدمات المطلوبة في
                    الموقع، تبين
                    ان
                    هنالك العديد من المهارات المطلوبة في خدمة واحدة او اكثر، وبذلك كان لا بد من معرفة ما هي المهارات
                    الاكثر تواجدا في الخدمات بشكل عام</div>
                <img src="/images/diagrams/download1.png" class="img-fluid w-100" alt="...">
                <div class="lh-base font-ar-para col-bg-color h6 p-3 text-break text-center fw-bold rounded-bottom rtl">
                    كما
                    هو
                    موضح في
                    المخطط، يوجد لكل مهارات
                    معينة نسبة
                    مئوية تبين لنا ما هو اكثر تكرارا في الخدمات الموجودة على الموقع بشكل عام، فمثلا اكثر مهارة تكرارا هي
                    Wealth Management بنسبة 7%.</div>
            </div>

            <div class="mt-5">
                <div class="lh-base font-ar-para col-bg-color h6 mb-0 p-3 text-break text-center fw-bold rounded-top">
                    بعد
                    اجراء
                    بحث حول
                    المهارات الاكثر
                    تكرارا، كان من
                    المهم
                    تحديد المهارات من ناحية السعر لكل مهارة بحسب سعر الخدمات المرتبطة بها، حيث انه يوجد خدمة واحدة او
                    اكثر تحتاج الى نفس المهارة.</div>
                <img src="/images/diagrams/last_img_0.png" class="img-fluid w-100" alt="...">
                <div class="lh-base font-ar-para col-bg-color h6 p-3 text-break text-center fw-bold rounded-bottom rtl">
                    يبيّن لنا
                    المخطط
                    متوسط سعر كل المهارة
                    الواحدة، من
                    الممكن تحديد سعر الخدمة الزاحدة بحسب سعر كل مهارة مطلوبة في هذه الخدمة، من الممكن ان يكون السعر
                    النهائي قريب جدا الى مجموع اسعار كل من المهارات المطلوبة في هذه الخدمة.</div>
            </div>

            <div class="mt-5">
                <div class="lh-base font-ar-para col-bg-color h6 mb-0 p-3 text-break text-center fw-bold rounded-top">

                    بعد إجراء دراسة حول الطلب على الخدمات والمهارات، تبيّن أن هناك طلب على العمل والخدمات المكتبيّة،
                    سواء كان ذلك عن بُعد أو جزئيًّا. يشمل هذا الطلب بشكل عام الأعمال المتعلقة بتقنية المعلومات، التسويق
                    الرقمي، الإدارة، التصميم، الكتابة، وغيرها من الخدمات الأخرى التي يمكن تقديمها عن بعد
                </div>
                <img src="{{ asset('images/diagrams/remotly onsite.png') }}" class="img-fluid w-100" alt="...">
                <div class="lh-base font-ar-para col-bg-color h6 p-3 text-break text-center fw-bold rounded-bottom rtl">

                    تبين لنا بعد الدراسة أن النسبة الأكبر من الطلب على الخدمات والمهارات هي للعمل عن بعد، حيث يبلغ معدل
                    هذا النوع من العمل حوالي 35٪ من إجمالي الطلب على الخدمات. يعود ذلك إلى العديد من العوامل، مثل التطور
                    التكنولوجي وتحسين وسائل الاتصال عن بُعد، ورغبة الأفراد والشركات في تقليل التكاليف والوقت والجهد
                    المرتبطة بالتنقل والاجتماعات الحضورية، وغيرها. كما يشير ذلك إلى أهمية توفير الخدمات الرقمية والتقنية
                    المناسبة لتلبية هذا النوع من الطلب، وتوفير بيئة عمل مناسبة للعمل عن بُعد
                </div>
            </div>

            <div class="mt-5">
                <div class="lh-base font-ar-para col-bg-color h6 mb-0 p-3 text-break text-center fw-bold rounded-top">

                    يتيح المخطط التالي نظرة سريعة على الأعمال الأكثر طلبًا في مواقع الفريلانسر خلال شهر معين، مما يمكن
                    المستخدمين من
                    تحديد المجالات المطلوبة والتركيز عليها، كما يساعد المستخدمين في تحليل اتجاهات الطلب على الأعمال في
                    هذه المواقع

                </div>
                <img src="{{ asset('images/diagrams/topjobs.png') }}" class="img-fluid w-100" alt="...">
                <div class="lh-base font-ar-para col-bg-color h6 p-3 text-break text-center fw-bold rounded-bottom rtl">

                    إذا نظرنا إلى النتائج، فسنلاحظ أن أكثر الخدمات المطلوبة على مواقع الفريلانسر هي خدمات المحاسبة،
                    تليها خدمات مساعدة المحاسبة. ويمكن القول أن خدمات المحاسبة هي الأكثر طلبًا حيث تم طلبها أكثر من 500
                    مرة، وتمثل أكثر من ربع الطلبات المسجلة.

                    وبناءً على هذه النتائج، يمكن للعاملين في مجال المحاسبة وخدمات المساعدة المحاسبية الاهتمام بتطوير
                    مهاراتهم في هذا المجال، وزيادة فرص عملهم على مواقع الفريلانسر. كما يمكن للأفراد الراغبين في العمل
                    كمستقلين في هذا المجال الاستهداف وتطوير خدماتهم في هذه المجالات لتلبية الطلب المتزايد
                </div>
            </div>


            <div class="mt-5">
                <div class="lh-base font-ar-para col-bg-color h6 mb-0 p-3 text-break text-center fw-bold rounded-top">
                    لدينا المخطط التالي، يعرض هذا المخطط النسبة المئوية للزيادة على طلب خدمة ما خلال الاسبوعين الماضيين،
                    يمكن أن يكون هذا مؤشرًا على أهمية الخدمات المقدمة والحاجة إليها في الوقت
                    الحالي. يمكن أن يوضح المخطط أيضًا بعض الأنماط أو الاتجاهات في الزيادة في الطلب على الخدمات في
                    داتاسيت. على سبيل المثال، قد يكون هناك تزايد في الطلب على خدمات المعالجة أو التحليل البياني، أو
                    زيادة في عدد المستخدمين الذين يستخدمون الخدمات في هذه الفترة.
                </div>
                <img src="{{ asset('images/diagrams/last_img_1.png') }}" class="img-fluid w-100" alt="...">
                <div class="lh-base font-ar-para col-bg-color h6 p-3 text-break text-center fw-bold rounded-bottom rtl">
                    بالإضافة إلى ذلك، يمكن استخدام المخطط للتنبؤ بالطلب المستقبلي على الخدمات في داتاسيت، وتحديد
                    الاحتياجات التقنية والبشرية اللازمة لتلبية هذا الطلب وتحسين الخدمات المقدمة. </div>
            </div>
        </div>
    </section>

    {{-- Footer here --}}
    @include('layouts.footer')

</body>

</html>
