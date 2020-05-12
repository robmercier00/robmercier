import { Component, OnInit } from '@angular/core';
import { faChevronDown } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-experience',
  templateUrl: './experience.component.html',
  styleUrls: ['../app.component.scss']
})
export class ExperienceComponent implements OnInit {
  constructor() { }

  ngOnInit(): void {
  }
  faChevronDown = faChevronDown;
  moreExperience = false;
  showMoreExperience(e) {
    return this.moreExperience = !this.moreExperience;
  }
}
