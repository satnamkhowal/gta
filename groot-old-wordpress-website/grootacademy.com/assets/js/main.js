
document.addEventListener('DOMContentLoaded', function () {
  const forms = document.querySelectorAll('.lead-form');
  forms.forEach(function(form) {
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      trackLead('Website Enquiry Form');
      alert('Thank you! Groot Academy team will contact you shortly.');
      form.reset();
    });
  });
  document.querySelectorAll('[data-track]').forEach(function(el) {
    el.addEventListener('click', function() {
      const name = el.getAttribute('data-track') || 'button_click';
      trackCustomEvent(name);
    });
  });
});
function trackLead(sourceName) {
  if (typeof gtag === 'function') {
    gtag('event', 'generate_lead', {event_category:'Lead', event_label:sourceName, page_location:window.location.href});
    gtag('event', 'conversion', {send_to:'AW-5494453325/CONVERSION_LABEL_HERE'});
  }
  if (typeof fbq === 'function') {fbq('track','Lead',{content_name:'Groot Academy Course Enquiry', lead_source:sourceName});}
}
function trackCustomEvent(eventName) {
  if (typeof gtag === 'function') {gtag('event', eventName, {event_category:'Engagement', page_location:window.location.href});}
  if (typeof fbq === 'function') {fbq('trackCustom', eventName, {page_location:window.location.href});}
}
