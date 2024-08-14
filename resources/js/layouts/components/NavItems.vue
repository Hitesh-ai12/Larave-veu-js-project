<script setup>
import VerticalNavGroup from '@layouts/components/VerticalNavGroup.vue';
import VerticalNavLink from '@layouts/components/VerticalNavLink.vue';
</script>

<template>
  <!-- 👉 Dashboards -->
  <VerticalNavGroup
    :item="{
      title: 'Dashboards',

      icon: 'ri-home-smile-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Analytics',
        to: '/dashboard',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'CRM',
        href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/dashboards/crm',
        target: '_blank',
     
      }"
    />

  </VerticalNavGroup>


  <VerticalNavLink
    :item="{
      title: 'Action Plan',
      icon: 'ri-git-commit-line',
      href: '',
   

    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Settings',
      icon: 'ri-user-settings-line',
      to: '/account-settings',
    }"
  />



  <!-- 👉 Front Pages -->
  <VerticalNavGroup
    :item="{
      title: 'Listings',
      icon: 'ri-file-copy-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Property Listings',
        href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/front-pages/landing-page',
        target: '_blank',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'Pre-Construction Listings',
        href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/front-pages/pricing',
        target: '_blank',
      }"
    />

  </VerticalNavGroup>

  <!-- <VerticalNavLink
    :item="{
      title: 'Email',
      icon: 'ri-mail-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/apps/email',
      target: '_blank',

    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Chat',
      icon: 'ri-wechat-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/apps/chat',
      target: '_blank',

    }"
  /> -->
  <VerticalNavLink
    :item="{
      title: 'My Team',
      icon: 'ri-checkbox-multiple-line',
      href: '',
 
 
    }"
  />  
  <!-- <VerticalNavLink
    :item="{
      title: 'Calendar',
      icon: 'ri-calendar-line',
      href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/apps/calendar',
      target: '_blank',

    }"
  /> -->

  <VerticalNavGroup
    :item="{
      title: 'Reports',

      icon: 'ri-home-smile-line',
    }"
  >
    <VerticalNavLink
      :item="{
        title: 'Email Reports',
        to: '/dashboard',
      }"
    />
    <VerticalNavLink
      :item="{
        title: 'SMS Reports',
        href: 'https://demos.themeselection.com/materio-vuetify-vuejs-laravel-admin-template/demo-1/dashboards/crm',
        target: '_blank',
     
      }"
    />

  </VerticalNavGroup> 


  <VerticalNavLink
    :item="{
      title: 'Integration',
      icon: 'ri-drag-drop-line',
      href: '',
      target: '',

    }"
  />



  <!-- <VerticalNavLink
    :item="{
      title: 'Login',
      icon: 'ri-login-box-line',
      to: '/login',
    }"
  />
  <VerticalNavLink
    :item="{
      title: 'Register',
      icon: 'ri-user-add-line',
      to: '/register',
    }"
  /> -->
  <!-- <VerticalNavLink
    :item="{
      title: 'Error',
      icon: 'ri-information-line',
      to: '/no-existence',
    }"
  /> -->


  <!-- <VerticalNavLink
    :item="{
      title: 'Typography',
      icon: 'ri-text',
      to: '/typography',
    }"
  /> -->
  <VerticalNavLink
    :item="{
      title: 'Manage Website',
      icon: 'ri-remixicon-line',
      to: '/icons',
    }"
  />
  <!-- <VerticalNavLink
    :item="{
      title: 'Cards',
      icon: 'ri-bar-chart-box-line',
      to: '/cards',
    }"
  /> -->


  <VerticalNavLink
    :item="{
      title: 'N/A',
      icon: 'ri-layout-4-line',
      to: '',
    }"
  />


   <VerticalNavLink
    :item="{
      title: 'Tables',
      icon: 'ri-table-alt-line',
      to: '/tables',
    }"
  /> 



</template>
