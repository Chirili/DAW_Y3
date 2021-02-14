import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  navBar = {
    isNavbarCollapsed : false,
    owners: {
      dropdown: true
    },
    vets:{
      dropdown: true
    },
  }
  title = 'petclinic';
}
