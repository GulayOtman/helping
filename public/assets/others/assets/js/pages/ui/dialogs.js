$(function () {
    $('.js-sweetalert').on('click', function () {
        var type = $(this).data('type');
        if (type === 'basic') {
            showBasicMessage();
        }
        else if (type === 'with-title') {
            showWithTitleMessage();
        }
        else if (type === 'success-permit') {
            showSuccessPermitMessage();
        }
        else if (type === 'warning-permit') {
            showWarningPermitMessage();
        }
        else if (type === 'success-payment') {
            showSuccessPaymentMessage();
        }
        else if (type === 'success-overtime') {
            showSuccessOvertimeMessage();
        }
        else if (type === 'success-company') {
            showSuccessCompanyMessage();
        }
        else if (type === 'success-branch') {
            showSuccessBranchMessage();
        }
        else if (type === 'success-department') {
            showSuccessDepartmentMessage();
        }
        else if (type === 'success-apellation') {
            showSuccessApellationMessage();
        }
        else if (type === 'success-company-edit') {
            showSuccessCompanyEditMessage();
        }
        else if (type === 'success-branch-edit') {
            showSuccessBranchEditMessage();
        }
        else if (type === 'success-department-edit') {
            showSuccessDepartmentEditMessage();
        }
        else if (type === 'success-apellation-edit') {
            showSuccessApellationEditMessage();
        }
        else if (type === 'success-branch-delete') {
            showSuccessBranchDeleteMessage();
        }
        else if (type === 'success-department-delete') {
            showSuccessDepartmentDeleteMessage();
        }
        else if (type === 'success-apellation-delete') {
            showSuccessApellationDeleteMessage();
        }
        else if (type === 'confirm') {
            showConfirmMessage();
        }
        else if (type === 'cancel') {
            showCancelMessage();
        }
        else if (type === 'with-custom-icon') {
            showWithCustomIconMessage();
        }
        else if (type === 'html-message') {
            showHtmlMessage();
        }
        else if (type === 'autoclose-timer') {
            showAutoCloseTimerMessage();
        }
        else if (type === 'prompt') {
            showPromptMessage();
        }
        else if (type === 'ajax-loader') {
            showAjaxLoaderMessage();
        }
    });
});

//These codes takes from http://t4t5.github.io/sweetalert/
function showBasicMessage() {
    swal("Here's a message!");
}

function showWithTitleMessage() {
    swal("Here's a message!", "It's pretty, isn't it?");
}

function showSuccessPermitMessage() {
    swal("Tamamland??!", "??zin Talebiniz Ba??ar??yla Olu??turuldu.", "success");
}

function showWarningPermitMessage() {
    swal("Hata!", "Reddedilmi?? Tarihte Yeni ??zin Talebi Olu??turulamaz!", "warning");
}

function showSuccessPaymentMessage() {
    swal("Tamamland??!", "??deme Talebiniz Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessOvertimeMessage() {
    swal("Tamamland??!", "Fazla Mesai Talebiniz Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessCompanyMessage() {
    swal("Tamamland??!", "Yeni ??irket Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessBranchMessage() {
    swal("Tamamland??!", "Yeni ??ube Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessDepartmentMessage() {
    swal("Tamamland??!", "Yeni Departman Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessApellationMessage() {
    swal("Tamamland??!", "Yeni ??nvan Ba??ar??yla Olu??turuldu.", "success");
}

function showSuccessCompanyEditMessage() {
    swal("Tamamland??!", "??irket Bilgileri Ba??ar??yla G??ncellendi.", "success");
}

function showSuccessBranchEditMessage() {
    swal("Tamamland??!", "??ube Ba??ar??yla G??ncellendi.", "success");
}

function showSuccessDepartmentEditMessage() {
    swal("Tamamland??!", "Departman Ba??ar??yla G??ncellendi.", "success");
}

function showSuccessApellationEditMessage() {
    swal("Tamamland??!", "??nvan Ba??ar??yla G??ncellendi.", "success");
}

function showSuccessBranchDeleteMessage() {
    swal("Tamamland??!", "??ube Ba??ar??yla Silindi.", "success");
}

function showSuccessDepartmentDeleteMessage() {
    swal("Tamamland??!", "Departman Ba??ar??yla Silindi.", "success");
}

function showSuccessApellationDeleteMessage() {
    swal("Tamamland??!", "??nvan Ba??ar??yla Silindi.", "success");
}

function showConfirmMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function () {
        swal("Deleted!", "Your imaginary file has been deleted.", "success");
    });
}

function showCancelMessage() {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this imaginary file!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "Yes, delete it!",
        cancelButtonText: "No, cancel plx!",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
        } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
        }
    });
}

function showWithCustomIconMessage() {
    swal({
        title: "Sweet!",
        text: "Here's a custom image.",
        imageUrl: "../assets/images/sm/avatar2.jpg"
    });
}

function showHtmlMessage() {
    swal({
        title: "HTML <small>Title</small>!",
        text: "A custom <span style=\"color: #CC0000\">html<span> message.",
        html: true
    });
}

function showAutoCloseTimerMessage() {
    swal({
        title: "Auto close alert!",
        text: "I will close in 2 seconds.",
        timer: 2000,
        showConfirmButton: false
    });
}

function showPromptMessage() {
    swal({
        title: "An input!",
        text: "Write something interesting:",
        type: "input",
        showCancelButton: true,
        closeOnConfirm: false,
        animation: "slide-from-top",
        inputPlaceholder: "Write something"
    }, function (inputValue) {
        if (inputValue === false) return false;
        if (inputValue === "") {
            swal.showInputError("You need to write something!"); return false
        }
        swal("Nice!", "You wrote: " + inputValue, "success");
    });
}

function showAjaxLoaderMessage() {
    swal({
        title: "Ajax request example",
        text: "Submit to run ajax request",
        type: "info",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true,
    }, function () {
        setTimeout(function () {
            swal("Ajax request finished!");
        }, 2000);
    });
}
