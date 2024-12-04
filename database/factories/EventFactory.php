<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class EventFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Event::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition(): array
  {
    $faker = FakerFactory::create('ja_JP');
    return [
      'name' => $faker->unique()->realText(15), // ランダムなタイトルを生成
      'description' => $faker->unique()->realText(200), // ランダムな説明文を生成
      'start_time' => $faker->dateTimeBetween('now', '+1 month'), // 現在から1ヶ月以内のランダムな開始日時
      'end_time' => $faker->dateTimeBetween('+1 month', '+2 years'), // 現在から2年以内のランダムな終了日時
    ];
  }
}
