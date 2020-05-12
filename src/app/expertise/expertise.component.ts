import { Component, OnInit } from '@angular/core';
import { faChevronDown } from '@fortawesome/free-solid-svg-icons';
import { faChevronUp } from '@fortawesome/free-solid-svg-icons';

@Component({
  selector: 'app-expertise',
  templateUrl: './expertise.component.html',
  styleUrls: ['../app.component.scss']
})
export class ExpertiseComponent implements OnInit {
  isHiddenExpertise = false;
  faChevronDefault = faChevronDown;
  faChevronDown = faChevronDown;
  faChevronUp = faChevronUp;
  toggleExpertise(): boolean {
    return this.isHiddenExpertise = !this.isHiddenExpertise;
  }
  onToggleExpertise(e) {
    this.toggleExpertise() ? this.faChevronDefault = this.faChevronUp : this.faChevronDefault = this.faChevronDown;
  }
}
