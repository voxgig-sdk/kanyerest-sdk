# ProjectName SDK exists test

import pytest
from kanyerest_sdk import KanyerestSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = KanyerestSDK.test(None, None)
        assert testsdk is not None
