import pytest

class TestRandomizer:
    def test_one(self):      # Unit test: Checks correct length of returned list
        actual = len(randomizer.medicine())
        assert actual == 3       

    def test_two(self):   # Unit test: Checks random medicine are from the correct medicine type
        for medicine in randomizer.medicine():
            assert medicine in randomizer.medicinedict.keys()

class TestApp:
    def test_one(self):
        actual = 3
        assert actual == 3