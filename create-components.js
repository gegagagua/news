const fs = require('fs');
const path = require('path');

const homeHtml = fs.readFileSync('/tmp/home_component.html', 'utf8');
const categoryHtml = fs.readFileSync('/tmp/category_component.html', 'utf8');
const newsHtml = fs.readFileSync('/tmp/news_component.html', 'utf8');

const createVueComponent = (name, html) => {
  // Escape backticks and $ for template literals
  const escaped = html.replace(/`/g, '\\`').replace(/\${/g, '\\${');
  return `<template>
  <div>
${escaped}
  </div>
</template>

<script>
export default {
  name: '${name}'
};
</script>
`;
};

// Ensure components directory exists
const componentsDir = path.join(__dirname, 'resources/js/components');
if (!fs.existsSync(componentsDir)) {
  fs.mkdirSync(componentsDir, { recursive: true });
}

fs.writeFileSync(path.join(componentsDir, 'Home.vue'), createVueComponent('Home', homeHtml));
fs.writeFileSync(path.join(componentsDir, 'Category.vue'), createVueComponent('Category', categoryHtml));
fs.writeFileSync(path.join(componentsDir, 'NewsDetail.vue'), createVueComponent('NewsDetail', newsHtml));

console.log('Vue components created successfully');

