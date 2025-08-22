<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        // For now, we’ll simulate getting event data from DB.
        // Later, replace with Event::findOrFail($id);
        $events = [
            1 => (object)[
                'image' => 'assets/event1.png',
                'image2' => 'assets/event-image2.png',
                'title' => "Pioneering Awareness: Australia's First Community Q&A on Cardio-Oncology Draws Over 100 Attendees",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            2 => (object)[
                'image' => 'assets/event2.png',
                'image2' => 'assets/event-image2.png',
                'title' => "IC-OS President Susan Dent Stresses The Importance of Cardio-Oncology at ASCO 2025",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            3 => (object)[
                'image' => 'assets/event3.png',
                'image2' => 'assets/event-image2.png',
                'title' => "Advancements in Cardio-Oncology: A Vision for Comprehensive Patient Care",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            4 => (object)[
                'image' => 'assets/event4.png',
                'image2' => 'assets/event-image2.png',
                'title' => "IC-OS-Ph Takes Flight – A Milestone in Philippine Cardio-Oncology",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            5 => (object)[
                'image' => 'assets/event5.png',
                'image2' => 'assets/event-image2.png',
                'title' => "Moscow Cardio-Oncology Initiative in Australia",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            6 => (object)[
                'image' => 'assets/event6.png',
                'image2' => 'assets/event-image2.png',
                'title' => "Chinese Medical Association Journal of Cardio-Oncology – Call for Papers",
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            7 => (object) [
                'image' => 'assets/blog1.png',
                'image2' => 'assets/event-image2.png',
                'title' => 'New Training Program Launched for Local Physicians',
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            8 => (object) [
                'image' => 'assets/blog2.png',
                'image2' => 'assets/event-image2.png',
                'title' => 'National Forum on Cancer and Heart Care Held in Manila',
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],
            9 => (object) [
                'image' => 'assets/blog3.png',
                'image2' => 'assets/event-image2.png',
                'title' => 'ICOS PH Expands Global Ties with Regional Partners',
                'greetings' => "Greetings from the heart of Moscow's burgeoning Cardio-Oncology landscape! I am thrilled to share exciting developments from the Moscow City Cardio-Oncology center, marking a significant stride in our commitment to enhancing patient care and collaboration.",
                'description_title' => "Expansion and Accessibility",
                'description' => "In recent months, our center has expanded its footprint across Moscow, establishing cardiologist offices and implementing standardized operational procedures in three additional cancer centers. This expansion means that Cardio-Oncologists are now accessible in five of seven existing centers, ensuring more comprehensive care for cancer patients across the city.",
                'author' => "Elena Shavard, MD",
                'position' => "Moscow Cardio-Oncology Center based on S.S. Yudin City Clinical Hospital",
            ],

        ];

        $event = $events[$id] ?? abort(404);

        return view('pages.events.event_show', compact('event'));
    }
}
