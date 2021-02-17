var stepper1
var stepper2
var stepper3
var stepper4
var stepperForm

document.addEventListener('DOMContentLoaded', function () {
  var stepperFormEl = document.querySelector('#stepperForm')
  stepperForm = new Stepper(stepperFormEl, {
    animation: true
  })
  var btnNewtList = [].slice.call(document.querySelectorAll('.btn-new-form'))
  var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
  var btnPrevList = [].slice.call(document.querySelectorAll('.btn-prev-form'))
  var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
  var sel_region = document.getElementById('sel_region')
  var sel_province = document.getElementById('sel_province')
  var sel_municipality = document.getElementById('sel_municipality')
  var sel_barangay = document.getElementById('sel_barangay')
  var projects = document.getElementById('projects')
  var yearcovered_add = document.getElementById('yearcovered')
  var projectcost_add = document.getElementById('projectcost')
     
  var form = stepperFormEl.querySelector('.bs-stepper-content form')

  btnNextList.forEach(function (btn) {
    btn.addEventListener('click', function () {
      stepperForm.next()
    })
  })
  
  btnNewtList.forEach(function (btn) {
    btn.addEventListener('click', function () {
      stepperForm.reset()
    })
  })
  
 btnPrevList.forEach(function (btn) {
    btn.addEventListener('click', function () {
      stepperForm.previous()
    })
  })

  stepperFormEl.addEventListener('show.bs-stepper', function (event) {
    form.classList.remove('was-validated')
    var nextStep = event.detail.indexStep
    var currentStep = nextStep

    if (currentStep > 0) {
      currentStep--
    }

    var stepperPan = stepperPanList[currentStep]

    if ((stepperPan.getAttribute('id') === 'personalinfo'      && (
      !sel_region.value.length || 
      !sel_province.value.length || 
      !sel_municipality.value.length || 
      !sel_barangay.value.length || 
      !projects.value.length || 
      !yearcovered_add.value.length ||
      !projectcost_add.value.length))
    ) {
       event.preventDefault()
       form.classList.add('was-validated')
    }
  })
  
  
})