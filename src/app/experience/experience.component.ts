import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-experience',
  templateUrl: './experience.component.html',
  styleUrls: ['../app.component.scss']
})
export class ExperienceComponent implements OnInit {
  moreExperience = false;
  showMoreExperience(e) {
    return this.moreExperience = !this.moreExperience;
  }
}
