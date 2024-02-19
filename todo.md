User::first()->notify(new \MBarlow\Megaphone\Types\General('REAL <b> Test</b> notification',"Test notification ooo"));
User::first()->notify(new \MBarlow\Megaphone\Types\Important('REAL <b> Test</b> notification',"Test notification ooo"));
User::first()->notify(new \MBarlow\Megaphone\Types\NewFeature('REAL <b> Test</b> notification',"Test notification ooo"));