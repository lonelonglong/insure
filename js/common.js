function submitAction(formId, actionPath, target) {
    var form = document.getElementById(formId);
    form.action = actionPath;
    if (target != undefined && target != null) {
        form.target = target;
    } else {
        form.removeAttribute("target");
    }
    form.submit();

}